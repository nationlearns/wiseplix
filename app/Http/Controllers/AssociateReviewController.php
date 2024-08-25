<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssociateReview;

class AssociateReviewController extends Controller
{
    public function store(Request $request){

        AssociateReview::create([
            'associate_id' => $request['associate_id'],
            'user_id' => auth()->user()->id,
            'star' => $request['star'],
            'review' => $request['review'],
        ]);

        return redirect()->back()->with('status', 'Review SUbmitted');

    }
}
