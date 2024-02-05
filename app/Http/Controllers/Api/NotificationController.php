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
          
        $serverKey ="AAAAJbLwWZg:APA91bHwf00hOK5nMVAF9PDzJv92q0KG4nzdqKxbdr1mudjY6QbCOmxRSX2Y9DHgp7HJmnVrMpGQca9C9_LX5XSwX-cnGkaub0iqYreYksYt83Kd8LjWcNEL2ABnxjAcRDiq3xkuBcAN";
        $data = [
            "data" => [
                "title" => $title,
                "body_message" => $message,
            ],
            "registration_ids" => [$registrationId]
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
