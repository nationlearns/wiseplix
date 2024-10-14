<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminManagerController extends Controller
{
    public function index(){

        $users = User::whereIn('role', ['admin', 'employee', 'sales', 'service'])->get();  

        return view('admin.admin-manager.index', compact('users'));
    }

    public function create() {
        return view('admin.admin-manager.create');
    }

    function store(Request $request) {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'role' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make('wiseplix@123456789'),
        ]);

        return redirect()->route('admin-manager.index')->with('success', 'Manager Created');

    }

    function destroy($id){
        $category = User::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('error', 'User Deleted');
    }  
}
