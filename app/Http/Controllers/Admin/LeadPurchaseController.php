<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurchaseLeadDetails;


class LeadPurchaseController extends Controller
{
    function index() {
        $data = PurchaseLeadDetails::orderBy('created_at', 'DESC')->with('lead')->get();
        // return $data;
        return view('admin.lead-purchase.index', \compact('data'));
    }

    function show($id){
        $data = PurchaseLeadDetails::where('id', $id)->with('lead')->first();
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
