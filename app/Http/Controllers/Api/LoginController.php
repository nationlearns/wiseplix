<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    /**
     * Create User
     * @param Request $request
     * @return User 
     */
    public function createUser(Request $request)
    {
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

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), 
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken,
                'userData' => $user
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function UserDetail(){
        $user = Auth::User();
        return $user;
    }

    public function otpVerify(Request $request){
        $otp = $request->otp;
        $mobile = $request->mobile;
        $type = $request->type;
        $ftoken = $request->ftoken;
        $firebase_token = $request->firebase_token;
        $user  = User::where('mobile',$mobile)->where('otp',$otp)->first();
        if($user == null){
            return response()->json([
                'status' => false,
                'message' => 'Invalid OTP',
            ], 401);
        }else if($type == 'pro' && $user){
             // login
             $user->password = bcrypt(strval(random_int(100000, 999999)));
             $user->jwt_token = $ftoken;
             $user->firebase_token = $firebase_token;
             $user->save();
             Auth::login($user);
 
             // generate access token
             $tokenResult = $user->createToken("API TOKEN")->plainTextToken;
             $token = $tokenResult->plainTextToken;
             
             // send token
             return response()->json([
                'status' => true,
                 'mobile' => $mobile,
                 'access_token' => $token,
                 'token_type' => 'Bearer',
                 'expires_at' => Carbon::parse(
                     $tokenResult->token->expires_at
                 )->toDateTimeString()
             ]);
        }       
    }

}