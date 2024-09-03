<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategory;
use App\Models\Location;
use App\Models\Questions;
use App\Models\Package;

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
        ->where('status', 1)->get()->toArray();
        return $data;

    }

    public function getLocationDetails(Request $request){
        $pincode  = $request->input("query");
        $data = Location::select('*')->where('pincode', 'like', '%' . $pincode . '%')
        ->orderBy('name', 'ASC')
        ->get();
        return response()->json($data);
    }


    public function getLocation(Request $request){
        
        // Retrieve the search query from the request
        $query = $request->input('query');

        // Check if the query is not empty
        if (!$query) {
            return response()->json([]);
        }

        // Perform the search with a limit for better performance
        $locations = Location::select('id', 'name') // Select only needed columns
            ->where('name', 'like', '%' . $query . '%') // Use wildcard for partial matches
            ->limit(10) // Limit the number of results
            ->get();

        // Format the results for Select2
        $formattedLocations = $locations->map(function ($location) {
            return [
                'id' => $location->id,
                'text' => $location->name
            ];
        });

        // Return the results as JSON
        return response()->json($formattedLocations);
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

    public function getPackageDetails(){
        $data = Package::where('status', 'Active')->get();
        if (count($data)>0){
            return response()->json(['status' => true ,'data'=>$data ]);
        }
    }

    public function getUniqueStates() {
        $uniqueStates = Location::select('state_name')->distinct()
        ->orderBy('state_name', 'asc')
        ->pluck('state_name')->toArray();

        return response()->json(['status' => true ,'data'=>$uniqueStates ]);

    }

    public function getUniqueDistrictsByState(Request $request) {
        $stateName = $request->state_name;

        $uniqueDistricts = Location::where('state_name', $stateName)
                                    ->select('district_name')
                                    ->distinct()
                                    ->orderBy('district_name', 'asc')
                                    ->pluck('district_name')
                                    ->toArray();
    
        return response()->json(['status' => true, 'data' => $uniqueDistricts]);

    }

    public function getCategory($id){
       $category = Categories::where('id', $id)->first();
       return response()->json($category, 200); 
    }
   
}
