<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategory;
use App\Models\Location;
use App\Models\Questions;


class CategoriesController extends Controller
{
    public function getAllCategory(){
        $data = Categories::select('id as category_id',  'slug as name')->where('status', 1)->get();
        return response()->json([
            "status" => true,
            "data"=>$data
        ]);
    }

    public function getSubCategory($id){
        $data = Subcategory::select('id as subcategory_id', 'slug as name', 'category_id')
        ->where('category_id', $id)
        ->where('status', 1)->get();
        return response()->json([
            "status" => true,
            "data"=>$data
        ]);
    }

    public function getLocationDetails(Request $request){
        $pincode  = $request->input("query");
        $data = Location::select('*')->where('pincode', 'like', '%' . $pincode . '%')
        ->orderBy('name', 'ASC')
        ->get();
        return response()->json($data);
    }

    public function getquestionOptions(Request $request){
        $subCategory  = $request->input("subcategory_id");

        $dataArray = Questions::select('questions.id','questions.question_label','questions.subcategory_id', 'questions.category_id')
        ->where('subcategory_id', $subCategory)
        ->with('options')->get()->toArray();
               $questions = [];

               foreach ($dataArray as $data) {
                   $question = [
                       "category_id" => $data["category_id"],
                       "subcategory_id" =>$data["subcategory_id"],
                       "question" => $data["question_label"],
                       "options" => []
                   ];

                   foreach ($data["options"] as $option) {
                       $question["options"][] = $option["title"];
                   }

                   $questions[] = $question;
               }

           $result_json = $questions;
           return response()->json([
            'status'=>true,
            'data'=>$result_json]);
    }

    public function categorySearch(Request $request){
        $query = $request->input('query');
        $data = Subcategory::select('id', 'slug as name', 'category_id')
        ->where('slug', 'LIKE', "%$query%")
        ->get();

        return response()->json($data);
    }

   
}
