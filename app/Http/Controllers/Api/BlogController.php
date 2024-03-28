<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Faqs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blogs(){
        $blog = Blogs::latest()->get();
        return response()->json(['blogs' => $blog]);
    }

    public function BlogsDetails($id){
        $details = Blogs::where('id',$id)->first();
        return response()->json(['details' => $details]);
    }

    public function Faqs(){
         $faqs = Faqs::latest()->get();
         return response()->json(['faqs' => $faqs]);
    }

    public function FaqsDetails($id){
        $details = Faqs::where('id',$id)->first();
        return response()->json(['details' => $details]);
    }
}
