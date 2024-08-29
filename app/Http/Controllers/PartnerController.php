<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Models\Leads;
use App\Models\Categories;
use App\Models\Business;
use Carbon\Carbon;

class PartnerController extends Controller
{
    public function PartnerDashboard()
    {
        return view('partner.index');
    }

    public function PartnerLogin()
    {
        return view('partner.partner_login');
    }

    public function PartnerRegister()
    {
        return view('partner.partner_register');
    }

    public function StorePartnerRegister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'role' => 'pro',
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::PARTNER);
    }

    public function PartnerLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('partner.login');
    }

    public function PartnerProfile()
    {

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('partner.partner_profile_view', compact('profileData'));
    } // End Method 

    public function PartnerProfileEdit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('partner.partner_profile_edit', compact('editData'));
    } // End Method 

    public function PartnerStoreProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;

        if ($request->file('user_img')) {
            $file = $request->file('user_img');

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/user'), $filename);
            $data['user_img'] = $filename;
        }
        $data->save();
        return redirect()->route('partner.profile');
    } // End Method

    public function PartnerChangePassword()
    {
        return view('partner.partner_change_password');
    }

    public function PartnerUpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message', 'Password Updated Successfully');
            return redirect()->back();
        } else {
            session()->flash('message', 'Old password is not match');
            return redirect()->back();
        }
    } // End Method

    public function AllLeads()
    {
        $data = Leads::latest()->get();
        // dd($data);
        return view('partner.all_leads', compact('data'));
    }

    public function ContactUs()
    {
        return view('partner.contact_us');
    }
    public function StoreContactUs(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|max:10|min:10',
            'subject' => 'required',
            'message' => 'required'
        ], [
            'name.required' => 'Please Enter Your Name',
            'email.required' => 'Plaese Enter VAlid Email Address',
            'phone.required' => 'Please enter the phone number',
            'phone.max' => 'Please Enter 10 digits number only',
            'phone.min' => 'Please Enter 10 digits number only',
            'subject.required' => 'Please Enter Your Subject',
            'message.required' => 'Please Enter Your Message',
        ]);
        ContactUs::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back()->with('message', 'Form Submitted Successfully....');
    }

    public function PartnerTermsAndCondition()
    {
        return view('partner.termsandcondition');
    }

    public function AddBusiness()
    {
        $cat = Categories::where('status',1)->get();
        return view('partner.add_business',compact('cat'));
    }

    public function StoreBusiness(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'owner_name' => 'required',
            'business_name' => 'required',
            'business_description' => 'required',
            'alternate_number' => 'required',
            'landline'=> 'required',
            'address' => 'required',
            'website' =>'required',
            'establish_date' => 'required',
            'area_of_service'=> 'required',
        ],[
            'name.required' => 'Please Enter the Name',
            'email.required' => 'Please Enter the Name',
            'mobile.required' => 'Please Enter the Name',
            'owner_name.required' => 'Please Enter the Name',
            'business_name.required' => 'Please Enter the Name',
            'business_description.required' => 'Please Enter the Name',
            'alternate_number.required' => 'Please Enter the Name',
            'landline.required' => 'Please Enter the Name',
            'address.required' => 'Please Enter the Name',
            'website.required' => 'Please Enter the Name',
            'establish_date.required' => 'Please Enter the Name',
            'area_of_service.required' => 'Please Enter the Name',
        ]);
        $user_id = Auth::user()->id;
        // dd($request->all());
        Business::insert([
            'user_id' => $user_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'owner_name' => $request->owner_name,
            'business_name' => $request->business_name,
            'business_description' => $request->business_description,
            'alternate_number' => $request->alternate_number,
            'landline' => $request->landline,
            'address' => $request->address,
            'website' => $request->website,
            'establish_date' => $request->establish_date,
            'area_of_service' => $request->area_of_service
        ]);
        return redirect()->back();
    }
}
