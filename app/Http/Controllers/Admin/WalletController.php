<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Auth;

class WalletController extends Controller
{
    function store(Request $request, $user_id) {


        // Check if user's wallet exists
        $wallet = Wallet::where('user_id', $user_id)->first();

        if ($wallet) {
            // Update wallet points
            $wallet->amount += $request['amount'];
            $wallet->save();
        } else {
            // Create a new wallet entry
            Wallet::create([
                'user_id' => $user_id,
                'amount' => $request['amount'],
            ]);
        }

        return redirect()->back()->with('success', 'Wallet Point Added');


    }


    function update(Request $request, $wallet_id) {


        // Check if user's wallet exists
        $wallet = Wallet::where('id', $wallet_id)->first();

        if ($request['amount'] > $wallet['amount']) {

           return redirect()->back()->with('error', 'Amount must be less than current balance');

        } else {
             // Update wallet points
            $wallet->amount = ($wallet->amount - $request['amount']);
            $wallet->save();
        }

        return redirect()->back()->with('success', 'Wallet Point Deducted');


    }
}
