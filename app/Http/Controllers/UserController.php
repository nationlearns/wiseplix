<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewCategory(){
        $data = DB::table('categories')->select('id as category_id',  'slug as name')->where('status', 1)->get();
        return view('category',  compact('data'));
    }

    public function viewContact(){
        return view('contactus');
    }

    public function viewAbout(){
        return view('aboutus');
    }
}
