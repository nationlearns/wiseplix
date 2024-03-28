<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $cat = Categories::get()->count();
        $subcat = DB::table('sub_categories')->get()->count();
        $user = User::get()->count();
        return view('admin.index',compact('cat','subcat','user'));
    }

    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function ContactUs(){
        $data = ContactUs::latest()->get();
        return view('admin.contactus.index',compact('data'));
    }
}
