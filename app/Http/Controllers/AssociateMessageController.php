<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssociateMessage;
use App\Jobs\SendEmailToAssociate;
use App\Models\User;
class AssociateMessageController extends Controller
{
    //

    public function getAssociateMessage($associate_id){
        $data = AssociateMessage::where('associate_id', $associate_id)->get();
        return response()->json($data, 200);

    }

    public function getMessage($id){
        $data = AssociateMessage::where('id', $id)->first();
        return response()->json($data, 200);
    }

    public function store(Request $request){

        $data = AssociateMessage::create([
            'associate_id' => $request['associate_id'],
            'user_id' => auth()->user()->id,
            'message' => $request['message'],
        ]);


        // \dispatch(new SendEmailToAssociate($data));

        return redirect()->back()->with('success', 'Message Saved');

    }

}
