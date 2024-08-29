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
use Illuminate\Support\Facades\Auth;
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
        $cat = Categories::where('status', '1')->get();
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
        $cat = Categories::where('status',1)->get();
        $qtn = Questions::get();
        $state = Location::distinct('state_name')->get('state_name');
        //dd($location);
        return view('admin.lead.add_lead',compact('cat','qtn','state'));
    }

    public function getDistricts($stateName)
    {
        $districts = Location::where('state_name', $stateName)
                         ->distinct('district_name')
                         ->get(['district_name']);
        return response()->json($districts);
    }
    public function getAreaName($district_name)
    {
        $districts = Location::where('district_name', $district_name)
                         ->distinct('name')
                         ->get(['name']);
        return response()->json($districts);
    }

    public function StoreLead(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'answers' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'gender' => 'required',
            'pin_code' => 'required',
            'area_name' => 'required',
            'district_name' => 'required',
            'state' => 'required'
        ],[
           'category_id.required' => 'Please select Category',
           'subcategory_id.required' => 'Please select Sub Category',
           'name.required' => 'Please Enter Your Name',
           'email.required' => 'Please Enter Your Email Address',
           'mobile.required' => 'Please Enter Mobile Number',
        ]);
        $user_id = Auth::user()->id;
        Leads::insert([
            'user_id' => $user_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,

        ]);
    }
}
