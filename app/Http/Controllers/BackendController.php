<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Faqs;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class BackendController extends Controller
{
    public function AllCategory()
    {
        $data = DB::table('categories')->get();

        return view('admin.category.index', compact('data'));
    }

    public function AllSubCategory()
    {
        $data = DB::table('sub_categories')->get();
        return view('admin.subcategory.index', compact('data'));
    }

    public function AllBlogs()
    {
        $data = Blogs::latest()->get();
        return view('admin.blogs.index', compact('data'));
    }

    public function AddBlogs()
    {
        $data = DB::table('categories')->get();
        return view('admin.blogs.add_blog', compact('data'));
    }

    public function StoreBlog(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'blogs_image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'created_by' => 'required',
        ]);
        // dd($request->all());
        $cimage = $request->file('blogs_image');
        $c_name_gen = hexdec(uniqid()) . '.' . $cimage->getClientOriginalExtension();
        $save_path = 'upload/blogs_image/' . $c_name_gen;
        $save_url = $save_path;
        Blogs::insert([
            'category_id' => $request->category_id,
            'blogs_image' => $save_url,
            'title' => $request->title,
            'description' => $request->description,
            'place' => $request->place,
            'created_by' => $request->created_by,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('admin.all.blogs')->with('success','Blogs Created Successfully');
    }
    public function Faqs(){
        $data = Faqs::latest()->get();
        return view('admin.faqs.index',compact('data'));
    }
    public function AddFaqs(){
        $data = DB::table('categories')->get();
        return view('admin.faqs.add_faqs',compact('data'));
    }

    public function StoreFaqs(Request $request){
        $request->validate([
            'category_id' => 'required',
            'question' => 'required',
            'answers' => 'required',
        ]);
        Faqs::insert([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'answers' => $request->answers,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('admin.all.faqs')->with('success','Faqs Created Successfully');
    }

    public function AllUsers(){
        $data = User::latest()->get();
        return view('admin.users.index',compact('data'));
    }
}
