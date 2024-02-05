<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function edit($id)
    {
        $id = DB::table('categories')->where('id',$id)->get();
        return view('category.edit',compact('id'));
    }

    public function delete($id){
        $id = DB::table('categories')->where('id',$id)->get();

        $delete = $id->delete();
        if($delete){
            return redirect()->back()->with('message','Category deleted successfully');
        }else{
            return redirect()->back()->with('error','Category not found');
        }
    }

    public function update(){

    }
}
