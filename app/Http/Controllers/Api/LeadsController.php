<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\NotificationController;
use Illuminate\Http\Request;
use App\Models\Leads;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Log;

class LeadsController extends Controller
{
    public function createUser(array $data){
        
        $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => 'abc@123',
                'mobile' => $data['mobile'],
                'location_id' => $data['location_id'],
                'gender' => $data['gender'],
                'role' => 'user',
                'via' => 'nl-web'
        ]);

        
    $checkUserData = User::where('mobile',$data['mobile'])->first();
        
        Wallet::create([
            'user_id' =>$checkUserData->id,
            'amount' => 0.00,
        ]);
        return $user;
    }

    public function saveUserQuestionAnswerData(Request $request){
        $data = $request->all();
       Log::info('1');
        $checkUserData = User::where('mobile',$data['mobile'])->count();
        // if($checkUserData  <=  0){
        //     $createUser = array(
        //         'name' => $data['name'],
        //         'email' => $data['email'],
        //         'password' => 'abc@123',
        //         'mobile' => $data['mobile'],
        //         'location_id' => $data['location_id'],
        //         'gender' => $data['gender'],
        //         'role' => 'user',
        //         'via' => 'nl-web'
        // );
        
            
        // }
        $this->createUser($data);
        Log::info('2');

        $category_id = isset($data['answers'][0]['category_id'])  ? $data['answers'][0]['category_id'] : null;
        $subcategory_id = isset($data['answers'][0]['subcategory_id'])  ? $data['answers'][0]['subcategory_id'] :  null;
        $answerArray= [];
        foreach($data['answers'] as $ans){
            $data['question'] = $ans['question'];
            $data['answer'] = $ans['answer'];
            $answerArray[]['answers'] = $data;
        }
        $checkUserData = User::where('mobile',$data['mobile'])->first();
        $userId= $checkUserData->id;
        $user = Leads::create([
            'user_id'=>$userId,
            'category_id'=> isset($category_id) ? $category_id : $data['category_id'],
            'subcategory_id'=>isset($subcategory_id) ? $subcategory_id : $data['subcategory_id'],
            'answers' => json_encode($data['answers']),
            'name' =>  $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
            'lead_status'=> 'NotSold',
            'status'=>'1', 
            'added_by'=> $checkUserData->id,
            'created_at'=> \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'bought_times'=> '0',
            'other_query'=> $data['comment'],
            'location_id' => $data['location_id']

        ]);
        Log::info('3');

        // $this->notificationOfLeads($userId,$category_id,$data);
        return response()->json(['status'=>200, 'success'=> 'Leads Created Successfully', 'subcategory_id'=> $subcategory_id ]);
    }


    public function notificationOfLeads($userId, $category_id){
         $registrationId= [];
        $user = User::select('users.id','users.firebase_token', 'assoc_profile.category_id' )
        ->leftJoin('assoc_profile', 'assoc_profile.user_id','users.id')
        ->where('assoc_profile.category_id',$category_id)
        ->get();

        $data= Leads::select('new_lead.subcategory_id','sub_categories.slug','new_lead.name','new_lead.district','new_lead.pin_code')
        ->leftJoin('sub_categories','sub_categories.id','new_lead.subcategory_id')
        ->where('new_lead.user_id',$userId)->orderBy('new_lead.created_at', 'desc')->first();
        $notification = new NotificationController;

        foreach($user as $token){
                if(isset($token['firebase_token'] )!= null){
                    $registrationId = $token['firebase_token'];

                }
        }

        $token ='';
        $title= "New Lead Created";
        $message = $data->name." "  ." is looking for ".$data->slug." in "." " .$data->district.",". $data->pin_code;
        $notification->pushnotification($title,$message,$token,$registrationId);
    }

}
