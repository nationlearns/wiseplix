<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseLeadDetails;

class LeadPurchaseController extends Controller
{
    public function updateStatus(Request $request, $id){

        $data = PurchaseLeadDetails::where('id', $id)->first();

        $data->update([
            'status' => $request->status,
            'message' => $request->message,
        ]);

    }
}
