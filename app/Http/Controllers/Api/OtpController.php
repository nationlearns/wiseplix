<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TextLocal;
use App\Models\UserOtp;
use App\Models\User;

// require('../vendor/textlocal.class.php');

class OtpController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirmationPage(Request $request)
    {
        if ($request->session()->has('session_otp') && $request->session()->has('otp-verified') && $request->session()->get('otp-verified')) {
            return view('auth.signup-confirm');
        }else{
            return redirect()->route('register');
        }
    }

    // Send Otp
    public function sendTextMessage($sender, $numbers, $message, $otp){

        $apiKey = urlencode('MDhlMTdhOWIzYWI2ODIzMzQxYWNiZmYwNTY0Mzc1NjE=');

        // Prepare data for POST request
        // $data = array('apikey' => $apiKey);

        session()->put('session_otp', $otp);
        session()->put('mobile_number', $numbers);

        // $request->session()->put('session_otp', $otp);
        // $request->session()->put('mobile_number', $numbers);

        // Message details
        $numbers = urlencode($numbers) ;
        $sender = urlencode($sender);
       
        $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;

        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $timestamp =  $_SERVER["REQUEST_TIME"];
        session()->put('otp_time', $timestamp);
    }

    public function sendAnyMsg($numbers,$message,$sender,$isTest=false){
        $apiKey = urlencode('MDhlMTdhOWIzYWI2ODIzMzQxYWNiZmYwNTY0Mzc1NjE=');

        // Message details
        $numbers = urlencode($numbers) ;
        $sender = urlencode($sender);

        // $message = rawurlencode($message);
        $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;

        // echo $data;
        // exit;
        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        if ($isTest) {
            echo $response;exit;
        }
    }

    public function requestForOtpApi(Request $request)
    {
        $sender = 'NATLER';
        $numbers = $request->input('mobileNumber');
        $checkOtp= UserOtp::where('mobile', $numbers)->first();
        if(!empty($checkOtp)){
            $otp= $checkOtp->otp;
        }else{
            $otp = rand(100000, 999999);
        }
        $message = rawurlencode('Dear user Please use this OTP : '.$otp.' to continue on Nation Learns.');
        $otpData= UserOtp::create([
            'otp' => $otp,
            'mobile'=> $numbers
        ]);

        $this->sendTextMessage($sender, $numbers, $message, $otp);
        return true;
    }

    public function validateOtp(Request $request)
    {
        if ($request->session()->has('session_otp')) {
            $firstBx = $request->input('firstBx');
            $secondBx = $request->input('secondBx');
            $thirdBx = $request->input('thirdBx');
            $fourBx = $request->input('fourBx');
            $fifthBx = $request->input('fifthBx');
            $sixBx = $request->input('sixBx');
            
            $userOtp = $firstBx.$secondBx.$thirdBx.$fourBx.$fifthBx.$sixBx;
            $timestamp =  $_SERVER["REQUEST_TIME"];

            
            if(($timestamp - $request->session()->get('otp_time')) > 60)  // 300 refers to 300 seconds
            {
                $request->session()->put('otp-expired', true);
                return redirect()->back()->with('otp-expired',  "Don't receive the code Or OTP expired?");
            }

            if($userOtp == $request->session()->get('session_otp')){
                $request->session()->put('otp-verified', true);
                return redirect()->route('viewSignupForm');
            }else{
                $request->session()->put('otp-verified', false);
                return redirect()->back()->with('error', 'Failed to authenticate. OTP code is invalid!');
            }
        }
        return redirect()->back();
    }
    public function validateOtpApi(Request $request)
    {
        if ($request) {
            $data = $request->all();
            $userOtp = $data['otp'];
            
            $timestamp =  $_SERVER["REQUEST_TIME"];

            
            if(($timestamp - $data['otp_time']) > 60)  // 300 refers to 300 seconds
            {
                // $request->session()->put('otp-expired', true);
                return response()->json(['status'=>405,'message' => '', 'error'=>"Don't receive the code Or OTP expired?"]);
            }

            if($userOtp){
                $otpData= UserOtp::where('mobile', $data['mobile'])->where('otp',$userOtp)->count();
                if($otpData > 0){
                    $deleteotp=UserOtp::where('mobile', $data['mobile'])->delete();
                    return response()->json(['status'=>200,'message'=>"success", 'success' => "OTP Validate success", 'error'=>'']);
                }else{
                    return response()->json(['status'=>405,'message' => '', 'error'=>"Invalid OTP"]);
                }
                
            }else{
                return response()->json(['status'=>405,'message' => '','error'=>"Failed to authenticate. OTP code is invalid!"]);
            }
        }
        return response()->json(['status'=>405,'message' => '','error'=>"SomeThing Went Wrong!"]);
    }
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resendTextMessage(Request $request)
    {
        if($request->session()->has('mobile_number')){
            $sender = 'NATLER';
            $numbers = $request->session()->get('mobile_number');
            $otp = rand(100000, 999999);
            $message = rawurlencode('Dear user Please use this OTP : '.$otp.' to continue on Nation Learns.');
            $this->sendTextMessage($sender, $numbers, $message, $otp);
            $request->session()->put('otp-expired', false);
            return redirect()->route('verifyOtpPage');
        }else{
            return redirect()->route('register');
        }
    }

    Public function verifyUserMobile(Request $request){
        if ($request->input('request_type')!=null & $request->input('request_type') == 'check-mobile') {
            $isExist = User::where('mobile', $request->input('mobile'))->first();
            if ($isExist) {
                return response()->json(['data'=>  $isExist, 'msg'=> 'User Account Exist', 'status'=>1]);
            }else {
               return response()->json(['data'=>  $isExist, 'msg'=> 'User Account Do Not Exist', 'status'=>0]);
            }
        }
    }

    public function getOtp(Request $request)
    {
        $sender = 'NATLER';
        $numbers = $request->input('mobile');
        $checkUser = User::where('mobile',$numbers)->count();
        $otp = rand(100000, 999999);
        $message = rawurlencode('Dear user Please use this OTP : '.$otp.' to continue on Nation Learns.');

        //Check Mobile Number is already exist or not. If yes then send OTP otherwise show error
    
        if($checkUser == 0){
            $otpData= UserOtp::create([
                'otp' => $otp,
                'mobile'=> $numbers
            ]);
    
            $this->sendTextMessage($sender, $numbers, $message, $otp);
            return response(["success" => true,"message"=> "OTP has been sent.", 'type' =>'register'],200);
        } else {
            $otpData= UserOtp::create([
                'otp' => $otp,
                'mobile'=> $numbers
            ]);
    
            $this->sendTextMessage($sender, $numbers, $message, $otp);
            return response(["success" => true,"message"=> "OTP has been sent.", 'type' =>'login'],200);
        }
        
    }

}