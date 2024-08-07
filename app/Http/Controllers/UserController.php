<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Categories;
use App\Models\User;
use App\Models\Leads;
use App\Models\Location;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewCategory()
    {
        $data = DB::table('categories')->select('*')->where('status', 1)->orderBy('position', 'ASC')->paginate(8);
        return view('all_category',  compact('data'));
    }

    public function viewContact()
    {
        return view('contactus');
    }

    public function viewAbout()
    {
        return view('aboutus');
    }
    public function Blogs()
    {
        $data = Blogs::latest()->paginate(4);
        return view('blogs', compact('data'));
    }
    public function UserLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function Profile(){

        $user_id = Auth::user();

        $myreq = Leads::where('user_id', $user_id->id)->get();

        // return $myreq;
        // $id = Auth::user()->id;
        // $user_id = User::where('id', $id)->first();
        return view('profile', compact('user_id', 'myreq'));
    }

    public function AllCategory()
    {
        $data = Categories::where('status', 1)->paginate(8);
        return view('all_category',  compact('data'));
    }

    public function CategoryView($slug)
    {
        $slug = Categories::where('slug', $slug)->first();
        $id = $slug->id;
        $profile = DB::table('associate_profile')->select('*')->where('category_id', $id)->get();
        $count = $profile->count();
        $data = DB::table('sub_categories')->select('*')->where('category_id', $id)->where('status', 1)->get();
        return view('category_deatil', compact('slug', 'data', 'profile', 'count'));
    }

    public function AssProfile($id)
    {
        $id = DB::table('associate_profile')->select('*')->where('id', $id)->first();
        // dd($id);
        $cat_id = $id->category_id;
        $cat_name = Categories::where('id', $cat_id)->value('slug');
        // dd($cat_name);
        return view('profile_view', compact('id', 'cat_name'));
    }

    public function BlogsDetails($slug)
    {
        $blog = Blogs::where('slug', $slug)->first();
        $data = Blogs::latest()->paginate(3);
        // dd($blog);
        return view('blog_details', compact('blog', 'data'));
    }

    public function Listing($id)
    {
        $id = Categories::where('category_id', $id)->get();
        return view('listing', compact('id'));
    }
}
