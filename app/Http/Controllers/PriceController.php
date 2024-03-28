<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Price;
use App\Models\Questions;
use App\Models\Leads;
use App\Models\Location;
use App\Models\QuestionOptions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    public function AllPrice()
    {
        $data = Price::get();
        return view('admin.price.index', compact('data'));
    }

    public function AddPrice()
    {
        $cat = Categories::get();
        return view('admin.price.addprice', compact('cat'));
    }
    public function GetSubCategory($category_id)
    {
        $subcat = DB::table('sub_categories')->where('category_id', $category_id)->where('status',1)->get();
        return json_encode($subcat);
    }

    public function GetQuestion($subcategory_id){
        $qtn = Questions::where('subcategory_id',$subcategory_id)->get();
        return json_encode($qtn);
    }

    public function GetQuestionOtion($question_id){
        $qtnopt = QuestionOptions::where('question_id',$question_id)->get();
        return json_encode($qtnopt);
    }
    public function StorePrice(Request $request){
        Price::insert([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'points' => $request->points,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('all.price')->with('success','Points Added Sucessfully');
    }

    public function EditPrice($id){
        $id = Price::findOrFail($id);
        $cat = Categories::get();
        return view('admin.price.editprice',compact('id','cat'));
    }

    public function UpdatePrice(Request $request){
        $id = $request->id;

        Price::findOrfail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'points' => $request->points,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('all.price')->with('success','Points Updated Sucessfully');
    }

    public function DeletePrice($id){
        $id = Price::findOrFail($id)->delete();
        return redirect()->route('all.price')->with('success','Points Deleted Sucessfully');
    }

    public function AllLeads(){
        $data = Leads::latest()->get();
        return view('admin.lead.all_leads',compact('data'));
    }

    public function AddLeads(){
        $cat = Categories::get();
        $qtn = Questions::get();
        // $location = Location::get();
        // dd($location);
        return view('admin.lead.add_lead',compact('cat','qtn'));
    }
}
