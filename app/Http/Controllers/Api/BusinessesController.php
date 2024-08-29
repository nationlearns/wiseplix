<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\LeadsByPro;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessesController extends Controller
{

    public function CreateBusiness(Request $request){
        // $request->validate([
        //     'user_id' => 'required',
        //     'category_id' => 'required',
        //     'subcategory_id' => 'required',
        //     'name' => 'required',
        //     'email' => 'required',
        //     'mobile' => 'required',
        //     'owner_name' => 'required',
        //     'business_name' => 'required',
        //     'business_description' => 'required',
        //     'alternate_number' => 'required',
        //     'landline' => 'required',
        //     'location_id' => 'required',
        //     'address' => 'required',
        //     'company_type' => 'required',
        //     'website' => 'required',
        //     'establish_date' => 'required',
        //     'banner_image' => 'required',
        //     'profile_image' => 'required',
        //     'area_of_service' => 'required'
        // ]);

        $usei_id = Auth::user()->id;
        $profile_image_save_url = null;
        $banner_image_save_url = null;

        if ($request->hasFile('banner_image')) {
            
            $banner_image = $request->file('banner_image');
            $banner_image_name_gen = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            $save_path = 'uploads/business/banner_image/';
            $banner_image->move($save_path, $banner_image_name_gen);
            $banner_image_save_url = $save_path . $banner_image_name_gen;

        }

        if ($request->hasFile('profile_image')) {
            
            $profile_image = $request->file('profile_image');
            $profile_image_name_gen = hexdec(uniqid()) . '.' . $profile_image->getClientOriginalExtension();
            $save_path = 'uploads/business/profile_image/';
            $profile_image->move($save_path, $profile_image_name_gen);
            $profile_image_save_url = $save_path . $profile_image_name_gen;

        }

        $business = Business::insert([
            'user_id' => $usei_id,
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
            'location_id' => $request->location_id,
            'address' => $request->address,
            'company_type' => $request->company_type,
            'website' => $request->website,
            'establish_date' => $request->establish_date,
            'banner_image' => $banner_image_save_url,
            'profile_image' => $profile_image_save_url,
            'area_of_service' => $request->area_of_service,
            'created_at' => Carbon::now()
        ]);

        return response()->json(['business'=>'Business Created Successfully','status'=>true]);
    }


    public function getBusinessDetails() {
        $user_id = Auth::user()->id;
        $business = Business::where('user_id', $user_id)->get();
    
        if ($business) {
            return response()->json(['status' => true,'message' => "Record found successfully",'business' => $business ]);
        } else {
            return response()->json(['status' => false,'message' => "Record not Found", 'business' => []]);
        }
    }
    

    public function BusinessKycUpload(Request $request){
        
    }

    public function AddCustomer(Request $request){
        $customer_image = $request->file('customer_image');
        $customer_image_name_gen = hexdec(uniqid()) . '.' . $customer_image->getClientOriginalExtension();
        $save_path = 'uploads/business/customer/';
        $customer_image->move($save_path, $customer_image_name_gen);
        $customer_image_save_url = $save_path . $customer_image_name_gen;
        LeadsByPro::insert([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'mobile' => $request->mobile,
            'alternative_number' => $request->alternative_number,
            'lead_price' => $request->lead_price,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'location_id' => $request->location_id,
            'customer_image' => $customer_image_save_url,
            'added_by' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);
        return response()->json(['Customer'=>'Customer Created Successfully','status'=>200]);
    }


    public function UpdateBusiness(Request $request, $id)
{
    $user_id = Auth::user()->id;

    // Filter out the null values from the request parameters
    $dataToUpdate = array_filter([
        'category_id' => $request->category_id ?? null,
        'subcategory_id' => $request->subcategory_id ?? null,
        'name' => $request->name ?? null,
        'email' => $request->email ?? null,
        'mobile' => $request->mobile ?? null,
        'owner_name' => $request->owner_name ?? null,
        'business_name' => $request->business_name ?? null,
        'business_description' => $request->business_description ?? null,
        'alternate_number' => $request->alternate_number ?? null,
        'landline' => $request->landline ?? null,
        'location_id' => $request->location_id ?? null,
        'address' => $request->address ?? null,
        'company_type' => $request->company_type ?? null,
        'website' => $request->website ?? null,
        'establish_date' => $request->establish_date ?? null,
        'area_of_service' => $request->area_of_service ?? null,
        // 'banner_image' => $request->banner_image ? $this->uploadFile($request->file('banner_image')) : null,
        // 'profile_image' => $request->profile_image ? $this->uploadFile($request->file('profile_image')) : null,
        'updated_at' => Carbon::now()
    ]);

    $business = Business::updateOrCreate(
        ['id' => $id],
        $dataToUpdate
    );

    return response()->json(['business' => $business, 'status' => true]);
}


    public function uploadBannner(Request $request){
        $banner_image = $request->file('banner_image');
            $banner_image_name_gen = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            $save_path = 'uploads/business/banner_image/';
            $banner_image->move($save_path, $banner_image_name_gen);
            $banner_image_save_url = $save_path . $banner_image_name_gen;
    }

    public function uploadProfile(Request $request){
        $profile_image = $request->file('profile_image');
        $profile_image_name_gen = hexdec(uniqid()) . '.' . $profile_image->getClientOriginalExtension();
        $save_path = 'uploads/business/profile_image/';
        $profile_image->move($save_path, $profile_image_name_gen);
        $profile_image_save_url = $save_path . $profile_image_name_gen;
    }

}
