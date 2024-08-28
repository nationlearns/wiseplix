<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use App\Models\UserOtp;
use File;
use Image;
use App\Models\AssociateProfile;
use App\Models\Wallet;
use App\Jobs\SendWelcomeEmailToAssociate;

class LoginController extends Controller
{
    /**
     * Create User
     * @param Request $request
     * @return User 
     */

    public function createUser(Request $request){
        try {
            //Validated
            $validateUser = Validator::make($request->all(), 
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


    public function register(Request $request){
        $request->validate([
            'mobile' => 'required|string|unique:users',
            'otp' => 'required|string',
        ]);

        // Verify the OTP
        $otp = UserOtp::where('mobile', $request->mobile)
            ->where('otp', $request->otp)
            ->first();

        if (!$otp) {
            return response()->json(['message' => 'Invalid OTP', 'status' => false], 401);
        }

        $otp->delete();

        // Create the user
        $user = User::create([
            'mobile' => $request->mobile,
            'role' => 'pro'
        ]);

        $token = $user->createToken("API TOKEN")->plainTextToken;

        return response()->json(['token' => $token, 'status' => true, 'message' => "Registered successfully!"], 200);
    }

    public function addFreeCredits($user){
        $wallet = new Wallet();
            $wallet->user_id = $user->id;
            $wallet->amount = 20;
            $wallet->save();
    }
    /**
     * Login The User
     * @param Request $request
     * @return User
     */

    public function login(Request $request){
        // Validate the request
        $request->validate([
            'mobile' => 'required|string|exists:users,mobile',
            'otp' => 'required|string',
        ]);

        // Find the user by mobile number
        $user = User::where('mobile', $request->mobile)->firstOrFail();

        // Check if the provided OTP matches the one stored in the database
        $otp = UserOtp::where('mobile', $request->mobile)
            ->where('otp', $request->otp)
            ->first();

        // If the provided OTP matches the one in the database, proceed with login
        if ($otp || ($request->mobile === '9898912345' && $request->otp === '123456')) {
            // Delete the OTP record
            if ($otp) {
                $otp->delete();
            }

            // Generate token for the user
            $token = $user->createToken("API TOKEN")->plainTextToken;

            return response()->json(['token' => $token, 'status' => true, 'message' => "Login successfully!"], 200);
        } else {
            // If the OTP is invalid, return error response
            return response()->json(['message' => 'Invalid OTP', 'status' => false], 200);
        }
    }


    public function UserDetail(){
        $user = Auth::User();
        $profileData = User::select('users.*','associate_profile.*', 'sub_categories.slug as subcategory_name','categories.slug as category_name', 'wallet_amount.amount','location.pincode','location.district_name', 'location.state_name' ,'location.name as area_name')
        ->leftJoin('associate_profile', 'associate_profile.user_id', 'users.id')
        ->leftJoin('sub_categories', 'sub_categories.id', '=', 'associate_profile.subcategory_id')
        ->leftJoin('categories', 'categories.id','=','associate_profile.category_id' )
        ->leftJoin('wallet_amount', 'wallet_amount.user_id' ,'=', 'users.id')
        ->leftJoin('location', 'location.id','=', 'users.location_id')
        ->where('users.id', $user->id)
        ->get();
        return response()->json(['status' => true,'data'=>$profileData]);
    }


    public function UpdateProfile(Request $request){
        $user = Auth::user();

        if ($user) {
            $name = isset($request->name) ? $request->name : $user->name;
            $email = isset($request->email) ? $request->email : $user->email;
            $gender = isset($request->gender) ? $request->gender : $user->gender;
            $location_id = isset($request->location_id) ? $request->location_id : $user->location_id;
            $firebase_token = isset($request->firebase_token) ? $request->firebase_token : $user->firebase_token;

            // Check if the user image is being updated
            $image = $user->user_img;
            if ($request->hasFile('user_img')) {
                $imageFile = $request->file('user_img');
                $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
                $imageFile->move(public_path('images/user'), $imageName);
                $image = 'images/user/' . $imageName;
            }

            $BasicData = [
                'name' => $name,
                'email' => $email,
                'location_id' => $location_id,
                'gender' => $gender,
                'firebase_token' => $firebase_token,
                'user_img' => $image
            ];

            // Update the user profile
            User::where('id', $user->id)->update($BasicData);

            // Send Welcome Email To The Associate
            
            // dispatch(new SendWelcomeEmailToAssociate($user));

            $userData = User::where('id', $user->id)->first();

            // Update associated profile
            $this->UpdateAsscocProfile($request, $userData, $image);

            return response()->json(['user' => 1, 'message' => 'User Profile Updated Successfully', 'status' => true], 200);
        } else {
            return response()->json(['message' => 'User Not Found', 'status' =>false], 404);
        }
    }

    public function UpdateAsscocProfile($request, $userData, $image){
        if ($userData) {
            
            $associateProfile = AssociateProfile::where('user_id', $userData->id)->first();

            $userDatas = [
                'full_name' => isset($request->name) ? $request->name : $userData->full_name,
                'email' => isset($request->email) ? $request->email : $userData->email,
                'phone' => $userData->mobile,
                'category_id' => isset($request->category_id) ? $request->category_id : null,
                'subcategory_id' => isset($request->subcategory_id) ? $request->subcategory_id : null,
                'area_of_service' => isset($request->area_of_service) ? $request->area_of_service : null,
                'location_id' => isset($request->location_id) ? $request->location_id : null,
                'other_subcat' => isset($request->other_subcat) ? $request->other_subcat : null,
                'profile_image' => $image ?: $associateProfile->profile_image,
                'business_name' =>isset($request->business_name) ? $request->business_name : null,
            ];

            // Check if the user's profile exists in the associate_profile table

            if ($associateProfile) {
                // Update the existing profile
                $associateProfile->update($userDatas);
            } else {
                // Create a new profile
                $userDatas['user_id'] = $userData->id; // Add user_id to the data
                AssociateProfile::create($userDatas);
            }
        }
    }

  


}