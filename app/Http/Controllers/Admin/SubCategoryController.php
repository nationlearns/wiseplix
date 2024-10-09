<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use Str;

class SubCategoryController extends Controller
{
    function edit($id){
        $subcategory = Subcategory::where('id', $id)->first();
        return view('admin.subcategory.edit')->with('subcategory', $subcategory);
    }

    function update(Request $request, $id){
        $category = Subcategory::findOrFail($id);
        $category->slug = $request['slug'];
        $category->slug1 = Str::slug($request['slug'], '-');
        $category->status = $request['status'];

        $category->update();
        return redirect()->route('admin.all.subcategory')->with('success', 'SubCategory Updated');

    }

    function destroy(Request $request, $id){
        $category = Subcategory::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('error', 'Category Deleted');
    }


    function store(Request $request){
        $data = Subcategory::create([
            'category_id' => $request['category_id'],
            'slug' => $request['slug'],
            'slug1' => Str::slug($request['slug'], '-'),
            'status' => $request['status'],
        ]);
        return redirect()->back()->with('success', 'Category added');

    }
}
