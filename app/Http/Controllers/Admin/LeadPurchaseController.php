<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurchaseLeadDetails;
use App\Models\Leads;;


class LeadPurchaseController extends Controller
{
    function index() {


        // // Fetch all leads with their purchase details
        // $leads = Leads::with('getPurchaseDetails')->get();
        
        // return view('leads.index', compact('leads'));


        // $data = PurchaseLeadDetails::orderBy('created_at', 'DESC')->with('lead')->get();
        // // return $data;
        // return view('admin.lead-purchase.index', \compact('data'));


        $leads = Leads::whereHas('getPurchaseDetails')
            ->with('category')
            ->with('getPurchaseDetails')
            ->join('purchage_lead_details', 'leads.id', '=', 'purchage_lead_details.lead_id')
            ->orderBy('leads.id', 'DESC') // Replace 'some_column' with the actual column you want to sort by
            ->select('leads.*') // Make sure only the lead fields are selected
            ->get();


        return view('admin.lead-purchase.index', \compact('leads'));
    }

    function show($id){
        $data = Leads::where('id', $id)->with('getPurchaseDetails')->first();
        return view('admin.lead-purchase.show', \compact('data'));
    }


    public function updateStatus(Request $request, $id){

        $data = PurchaseLeadDetails::where('id', $id)->first();

        $data->update([
            'status' => $request->status,
            'message' => $request->message,
        ]);


        return redirect()->back()->with('status', 'Status Updated Successfully');

    }
}
