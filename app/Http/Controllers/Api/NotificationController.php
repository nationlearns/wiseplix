<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function markAsRead($id)
    {
    	$notification = Auth()->User()->unreadNotifications->where('id', $id)->markAsRead();
        return back();
    }

    public function delete()
    {
        
        $notifications = Auth()->User()->notifications()->get();

        foreach($notifications as $notification) {

            $notification->delete();
            
        }

        return back();
    }

    public function pushnotification($title,$message,$token,$registrationId){
        $url = 'https://fcm.googleapis.com/fcm/send';
        // $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();
          
        $serverKey ="AAAA3SD3D8s:APA91bEkQlA5-WMDaMLxiZL0wSsAEEG1A63l6KXyYZGFTmdf9DPYd1SWYe-ZTXQCFoDeoVuicFPQMGa3l8nVIOIMAQ4xm7Q4x0UZCtDdkeoMEKEA21cgL2V1hyZDKcX2CJ93-k5rNISS";
        $data = [
            "data" => [
                "title" => $title,
                "message" => $message,
            ],
            "id" => [$registrationId]
        ];
        $encodedData = json_encode($data);
    
        
        $headers = [
            'Authorization:key='.$serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);

        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);
    }
}
