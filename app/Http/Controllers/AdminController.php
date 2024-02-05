<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index()
    {
        return view('aboutus');
    }

    public function AddCat()
    {
        return view('category');
    }
    public function storeCat()
    {
        return view('category');
    }
}
