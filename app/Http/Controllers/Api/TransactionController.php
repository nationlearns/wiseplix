<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Http\Controllers\Api\OtpController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Package;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function rechargeWallet(Request $request)
    {
        $user = Auth::user();
        $package = Package::findOrFail($request->package_id);
        $packageAmount = $package->amount;
        $gstAmount = $packageAmount+($packageAmount * 18)/100;
        $packageName = $package->package_name;
        // Create a transaction record
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->amount = $package->amount;
        $transaction->transaction_id = $request->transaction_id;
        $transaction->payment_gateway = $request->payment_gateway;
        $transaction->amount_wthgst = $gstAmount;
        $transaction->wallet_point = $package->wallet_amount;
        $transaction->title = $request->title;
        $transaction->description = $request->description;


        $transaction->save();

        // Check if user's wallet exists
        $wallet = Wallet::where('user_id', $user->id)->first();

        if ($wallet) {
            // Update wallet points
            $wallet->amount += $package->wallet_amount;
            $wallet->save();
        } else {
            // Create a new wallet entry
            $wallet = new Wallet();
            $wallet->user_id = $user->id;
            $wallet->amount = $package->wallet_amount;
            $wallet->save();
        }
        $numbers =$user->mobile;
        $sms = new OtpController;
                try {
                    $message ="Dear $user->name,%nCongrats! You've successfully subscribed the $packageName package in Wiseplix.";
                    $sender = "NALPAR";
                    $sms->sendAnyMsg($numbers,$message,$sender);
                } catch (\Throwable $th) {
                    throw $th;
                }
        // Return response
        return response()->json(['success'=> true,'message' => 'Transaction recorded successfully'], );
    }

    public function getTransaction(){
        $user_id = Auth::user()->id;
        
        $transaction_data = Transaction::where('user_id', $user_id)->get();

        if($transaction_data){
            return response()->json(['status'=> true, 'message' => 'Transaction Record Found','data' => $transaction_data]);
        }
        else{
            return response()->json(['status'=> false,'message'=> 'No Transaction Found', 'data'=> []]);
        }
    }
}
