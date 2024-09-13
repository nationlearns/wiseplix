<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AssociateProfile;
use App\Models\Wallet;
use App\Models\Categories;

use Illuminate\Support\Facades\Hash;

class AssociateUserController extends Controller
{
    function index() {
        $associates = User::where('role', 'pro')->with('getLocation')->orderBy('created_at', 'DESC')->get();
        // return $associates;
        return view('admin.associates.index', compact('associates'));

    } 
    
    function getAssociateData($id){
        $data = User::where([['role', 'pro'], ['id', $id]])->first();
        return response()->json($data, 200);
    }

    function update(Request $request, $id){

        $user = User::findOrfail($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile']
        ]);

        return redirect()->back()->with('success', 'Associate Data Updated');
    }


    public function create(){
        return view('admin.associates.create');
    }


    public function store(Request $request){

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'gender' => $request['gender'],
            'role' => 'pro',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Associate User Created'); 
    }

    public function show($id){

        $cat = Categories::get();

        $user = User::where([['role', 'pro'], ['id', $id]])->with('leadPurchased')->first();


        return view('admin.associates.show', compact('user', 'cat'));
    }

    public function delete($id){
        $id = User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'User Deleted'); 

    }
}
