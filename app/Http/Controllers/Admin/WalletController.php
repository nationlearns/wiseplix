<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;

class WalletController extends Controller
{
    function store(Request $request) {

        Wallet::create([
            'user_id' => $request['user_id'],
            'amount' => $request['amount'],
        ]);

        return redirect()->back()->with('success', 'Wallet Point Added');


    }
}
