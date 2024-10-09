<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Str;

class CategoryController extends Controller
{

    function edit($id){
        $category = Categories::where('id', $id)->first();
        return view('admin.category.edit')->with('category', $category);
    }

    function update(Request $request, $id){
        $category = Categories::findOrFail($id);
        $category->alt_name = $request['alt_name'];
        $category->slug = Str::slug($request['alt_name'], '-');
        $category->status = $request['status'];

        $category->update();
        return redirect()->route('admin.all.category');

    }

    function destroy(Request $request, $id){
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('error', 'Category Deleted');
    }


    function store(Request $request){
        Categories::create([
            'alt_name' => $request['alt_name'],
            'slug' => Str::slug($request['alt_name'], '-'),
            'status' => $request['status'],
            'top_cat_id' => 0,
            'icon' => 'fa-500px',
            'cat-image' => (Str::slug($request['alt_name'], '-')).'jpeg'
        ]);
        return redirect()->back()->with('success', 'Category added');

    }
}
