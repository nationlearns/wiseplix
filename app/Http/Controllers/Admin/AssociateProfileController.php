<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AssociateProfile;

class AssociateProfileController extends Controller
{
    function store(Request $request, $id) {

        $user = User::where('id', $id)->first();

        $profile = AssociateProfile::create([
            'user_id' => $request['user_id'],
            'category_id' => $request['category_id'],
            'subcategory_id' => $request['subcategory_id'],
            'location_id' => $request['location_id'],
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'business_name' => $request['business_name'],
            'address' => $request['address'],
            'about_company' => $request['about_company'],
            'area_of_service' => $request['area_of_service'],
            'area' => $request['area'],
            'other_subcat' => $request['other_subcat'],

        ]);

        return redirect()->back()->with('success', 'Associate Profile Added');

    }


    function update(Request $request, $id) {

        $profile = AssociateProfile::findOrFail($id)->update($request->all());

        return redirect()->back()->with('success', 'Associate Profile Updated');

    }
}
