<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function addBlogs()
    {
        return view('blogs.add_blogs');
    }
    public function storeBlogs(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'blogs_image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'created_by' => 'required',
        ]);
        Blogs::insert([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => strtolower(str_replace(' ', '-', $request->title)),
            'description' => $request->description,
            'place' => $request->place,
            'created_by' => $request->created_by,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Blogs Created Successfully');
    }

    public function editBlogd($id)
    {
        $id = Blogs::findOrfail($id);
        return view('blogs.edit_blog', compact('id'));
    }

    public function deleteBlog($id)
    {
        $id = Blogs::findOrfail($id);
        $img =  $id->blogs_image;
        unlink($img);
        $id->delete();
    }
}
