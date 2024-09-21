<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\NotificationController;
use Illuminate\Http\Request;
use App\Models\Leads;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\PurchaseLeadDetails;
use App\Models\Subcategory;
use App\Models\followup;
use App\Models\Notification;
use App\Models\FilterData;
use App\Models\AssociateProfile;
use App\Models\ProfileVisit;
use DB;
use Carbon\Carbon;
use App\Jobs\SendLeadNotificationEmail;
use App\Jobs\SendLeadConfirmationEmail;
use Validator;
class LeadsController extends Controller{
    
    public function createUser(array $data){
        // Check if a user with the given mobile number or email already exists
        $existingUser = User::where('mobile', $data['mobile'])
            ->orWhere('email', $data['email'])
            ->first();

        // If user already exists, return the existing user
        if ($existingUser) {
            return $existingUser;
        }

        // Create a new user
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

        // Create a wallet for the new user
        Wallet::create([
            'user_id' => $user->id,
            'amount' => 0.00,
        ]);

        return $user;
    }

    public function saveUserQuestionAnswerData(Request $request){
        
        // $data = $request->all();

        // // Check if a user with the given mobile number or email already exists
        // $existingUser = User::where('mobile', $data['mobile'])
        //     ->orWhere('email', $data['email'])
        //     ->first();

        // // Determine if the user is new or existing
        // $isNewUser = !$existingUser;

        // // Create or get the user
        // $user = $this->createUser($data);

        // $categoryData = Subcategory::select('sub_categories.category_id')->where('sub_categories.id', $data['subcategory_id'])->get()->toArray();
        
        // $category_id = $categoryData[0]['category_id'];

        // $answerArray = [];

        // if (isset($data['answers']) && is_array($data['answers']) && count($data['answers']) > 0) {
        //     foreach ($data['answers'] as $ans) {
        //         $data['question'] = $ans['question'];
        //         $data['answer'] = $ans['answer'];
        //         $answerArray[]['answers'] = $data;
        //     }
        // } else {
        //     // If $data['answers'] is not set or empty, add a null entry to $answerArray
        //     $answerArray[]['answers'] = null;
        // }

        // $userId = $user->id;

        // $lead = Leads::create([
        //     'user_id' => $userId,
        //     'category_id' => $category_id,
        //     'subcategory_id' => $data['subcategory_id'],
        //     'answers' => !empty($data['answers']) ? json_encode($data['answers']) : null,
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'mobile' => $data['mobile'],
        //     'gender' => $data['gender'],
        //     'lead_status' => 'NotSold',
        //     'status' => '1',
        //     'added_by' => $userId,
        //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'bought_times' => '0',
        //     'other_query' => $data['comment'],
        //     'location_id' => $data['location_id'],
        //     'pin_code' => $data['pinCodeValue'],
        //     'district_name' => $data['disticName'],
        //     'state' => $data['stateName'],
        //     'area_name' => $data['areaName'],
        // ]);

        $data = $request->all();

        // Check if a user with the given mobile number or email already exists
        $existingUser = User::where('mobile', $data['mobile'])
            ->orWhere('email', $data['email'])
            ->first();

        // Determine if the user is new or existing
        $isNewUser = !$existingUser;

        // Create or get the user
        $user = $this->createUser($data);

        $categoryData = Subcategory::select('category_id')
            ->where('id', $data['subcategory_id'])
            ->get()->toArray();

        $category_id = $categoryData[0]['category_id'];

        $answerArray = [];

        // Ensure answers are being processed correctly
        if (isset($data['answers']) && is_array($data['answers']) && count($data['answers']) > 0) {
            foreach ($data['answers'] as $answerSet) {
                // If 'answer' is an array, it means multiple answers for the same question
                if (is_array($answerSet['answer'])) {
                    foreach ($answerSet['answer'] as $answer) {
                        // Append each selected answer as a separate entry
                        $answerArray[] = [
                            'question' => $answerSet['question'],
                            'answer' => $answer,
                            'category_id' => $category_id,
                            'subcategory_id' => $data['subcategory_id']
                        ];
                    }
                } else {
                    // Single answer case
                    $answerArray[] = [
                        'question' => $answerSet['question'],
                        'answer' => $answerSet['answer'],
                        'category_id' => $category_id,
                        'subcategory_id' => $data['subcategory_id']
                    ];
                }
            }
        } else {
            // If no answers are provided, add a null entry to the answer array
            $answerArray[] = ['question' => null, 'answer' => null];
        }
        $userId = $user->id;
        // Insert lead data
        $lead = Leads::create([
            'user_id' => $user->id,
            'category_id' => $category_id,
            'subcategory_id' => $data['subcategory_id'],
            'answers' => !empty($answerArray) ? json_encode($answerArray) : null,
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
            'lead_status' => 'NotSold',
            'status' => '1',
            'added_by' => $user->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'bought_times' => '0',
            'other_query' => $data['comment'],
            'location_id' => $data['location_id'],
            'pin_code' => $data['pinCodeValue'],
            'district_name' => $data['disticName'],
            'state' => $data['stateName'],
            'area_name' => $data['areaName'],
        ]);

        $this->notificationOfLeads($userId, $category_id, $data);

        // Determine the message based on whether the user is new or existing
        $welcomeMessage = $isNewUser 
            ? 'Welcome to Wiseplix ' . $data['name'] . '</br><br> Your request has been submitted our professional or service provider will contact you soon! </br><br> In the meanwhile you can also download the Wiseplix app and request for any services on the go </br><br> Here is the list of service providers in your city for the product your looking for.'
            : 'Welcome back ' . $data['name'] . '</br><br> We are happy to see you back. Your request has been submitted and our top-quality service provider or professional will reach out to you shortly. Kindly discuss the requirement and set up an appointment to meet.</br><br>Download the Wiseplix app and request any service on the go. In the meantime, check out the top service providers in your city.';


        // Retrieve all partners who match the category, subcategory, and city
        $partners = User::where('role', 'pro')
                        ->whereHas('associate', function ($query) use ($category_id, $data) {
                            $query->where('category_id', $category_id)
                                ->orWhere('subcategory_id', $data['subcategory_id'])
                                ->orWhere('area_of_service', $data['disticName']);
                        })->get();

        // Send the notification email to each partner
        foreach ($partners as $partner) {
            dispatch(new SendLeadNotificationEmail($lead, $partner));
        }

        // // Send Notification to the User Who Posted the lead
        dispatch(new SendLeadConfirmationEmail($lead, $user));

        return response()->json([
            'status' => 200, 
            'success' => 'Lead Created Successfully', 
            'subcategory_id' => $data['subcategory_id'],
            'success_msg' => $welcomeMessage,
            'new_user' => $isNewUser ? $user : null,
            'old_user' => !$isNewUser ? $user : null,
            'partner' => $partners
        ]);

    }



    public function notificationOfLeads($userId, $category_id, $data)
    {
        $registrationId = [];
        $user = User::select('users.id', 'users.firebase_token', 'associate_profile.category_id')
            ->leftJoin('associate_profile', 'associate_profile.user_id', 'users.id')
            ->where('associate_profile.category_id', $category_id)
            ->get();

        $data = Leads::select('leads.id as lead_id', 'leads.subcategory_id', 'sub_categories.slug', 'leads.name', 'leads.district_name', 'leads.pin_code')
            ->leftJoin('sub_categories', 'sub_categories.id', 'leads.subcategory_id')
            ->where('leads.user_id', $userId)->orderBy('leads.created_at', 'desc')->first();
        $notification = new NotificationController;
        foreach ($user as $token) {
            if (isset($token['firebase_token']) != null) {
                $registrationId = $token['firebase_token'];
            }
        }
        $leads_id = $data->lead_id;
        $token = '';
        $title = "New Lead Created";
        $message = $data->name . " "  . " is looking for " . $data->slug . " in " . " " . $data->district_name . "," . $data->pin_code;
        $notification->pushnotification($title, $message, $token, $registrationId);
        $this->saveNotifications($userId, $title, $message, $leads_id);
    }

    public function saveNotifications($userId, $title, $message, $leads_id)
    {
        Notification::create([
            'user_id' => $userId,
            'title' => $title,
            'message' => $message,
            'leads_id' => $leads_id,
        ]);

        return response()->json(['success' => true]);
    }

    public function getNotificationsByUser()
    {
        $userData = Auth::user();
        $notifications = Notification::orderBy('created_at', 'desc')->get();

        if ($notifications->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No notifications found.',
                'data' => []
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Notifications found.',
                'data' => $notifications
            ]);
        }
    }


    // public function getAllLeadList(Request $request){

    //     $userData = Auth::user();
        
    //     $userId = $userData->id;
        
    //     $leads_list = [];
        
    //     $leadId = [];
        
    //     $categoryId = AssociateProfile::select('category_id')->where('user_id', $userId)->first();
        
    //     $leadsId = PurchaseLeadDetails::select('lead_id')->where('user_id', $userId)->get();
        
    //     foreach ($leadsId as $lead) {
    //         $leadId[] = $lead->lead_id;
    //     }
        
    //     $query = Leads::select('leads.*', 'sub_categories.slug as subcategory_name', 'categories.alt_name as category_name', 'prices.points', 'location.pincode', 'location.district_name', 'location.state_name')
    //         ->leftJoin('categories', 'categories.id', '=', 'leads.category_id')
    //         ->leftJoin('sub_categories', 'sub_categories.id', '=', 'leads.subcategory_id')
    //         ->leftJoin('prices', 'prices.subcategory_id', 'leads.subcategory_id')
    //         ->leftJoin('location', 'location.id', 'leads.location_id')
    //         ->where(['leads.lead_status' => 'NotSold', 'leads.status' => 1])
    //         ->whereNotIn('leads.id', $leadId);

    //     // Get Location Based Data
    //     if ($userData->associate && ($userData->associate->location_id != null)) {
    //         $query->where('leads.location_id', $userData->associate->location_id);
    //     }
        
    //     if ($categoryId) {            
    //         $query->where('leads.category_id', $categoryId['category_id']);            
    //     }
            

    //     if (isset($request->pincode)) {
    //         $pincode = $request->pincode;
    //         $query->whereIn('leads.pin_code', 'like', '%' . $pincode . '%');
    //     }

    //     if (isset($request->category_id)) {
    //         $category = $request->category_id;
    //         $query->where('leads.category_id', '=', $category);
    //     }

    //     if (isset($request->subcategory_id)) {
    //         $subcategory = $request->subcategory_id;
    //         $query->whereIn('leads.subcategory_id', '=', $subcategory);
    //     }
    //     if (isset($request->district_name)) {
    //         $district = $request->district_name;
    //         $query->whereIn('leads.district_name', 'like', '%' . $district . '%');
    //     }
    //     if (isset($request->state_name)) {
    //         $state = $request->state_name;
    //         $query->where('leads.state', 'like', '%' . $state . '%');
    //     }

    //     $leadData = $query->orderBy('leads.created_at', 'DESC')->get();

    //     if ($leadData) {
    //         foreach ($leadData as $lead) {
            
    //             $answer = $lead->answers;
            
    //             $answerData = json_decode($answer, true);
            
    //             $answerId = !empty($answerData) && is_array($answerData) ? $answerData[0] : null;
            
    //             $leads_list[] = [
    //                 'id' => $lead->id,
    //                 'name' => $lead->name,
    //                 'email' => "XXXXXXXX@XXXX.XXX",
    //                 'mobile' => 'XXXXXXXXXX',
    //                 'category' =>  $lead->category_name,
    //                 'subcategory' => $lead->subcategory_name,
    //                 'gender' => $lead->gender,
    //                 'pincode' => $lead->pincode,
    //                 'points' => empty($lead->points) ? 0 : $lead->points,
    //                 'hot_lead' => 'Fresh',
    //                 'lead_date' => $lead->created_at,
    //                 'district' => $lead->district_name,
    //                 'state' => $lead->state_name,
    //                 'answerData' => $answerId,
    //                 'bought_times' => $lead->bought_times
    //             ];

    //         }
    //         return response()->json(['status'=> true,'leadData' => $leads_list, 'Message' => 'Data Found'], 200);
    //     }

    //     return response()->json(['status'=> true,'leadData' => 0, 'message' => 'No data found'], 200);
    
    // }



    public function getAllLeadList(Request $request)
    {
        $userData = Auth::user();
        $userId = $userData->id;

        // Get the user's purchased lead IDs and category
        $leadIds = PurchaseLeadDetails::where('user_id', $userId)->pluck('lead_id')->toArray();
        $categoryId = AssociateProfile::where('user_id', $userId)->value('category_id');

        // Base query for leads
        $query = Leads::select('leads.*', 'sub_categories.slug as subcategory_name', 'categories.alt_name as category_name', 'prices.points', 'location.pincode', 'location.district_name', 'location.state_name')
            ->leftJoin('categories', 'categories.id', '=', 'leads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'leads.subcategory_id')
            ->leftJoin('prices', 'prices.subcategory_id', '=', 'leads.subcategory_id')
            ->leftJoin('location', 'location.id', '=', 'leads.location_id')
            ->where('leads.lead_status', 'NotSold')
            ->where('leads.status', 1)
            ->whereNotIn('leads.id', $leadIds);

        // Apply location-based filter if the user has an associate profile with a location_id
        if ($userData->associate && $userData->associate->location_id) {
            // $query->where('leads.location_id', $userData->associate->location_id);
            $query->where('leads.district_name', $userData->associate->location->district_name);
        }

        // Filter by category if available
        if ($categoryId) {
            $query->where('leads.category_id', $categoryId);
        }

        // Additional filters based on request parameters
        $this->applyFilters($query, $request);

        // Fetch the leads with applied filters
        $leadData = $query->orderBy('leads.created_at', 'DESC')->get();

        // Process the leads
        if ($leadData->isNotEmpty()) {
            $leadsList = $this->transformLeadData($leadData);
            return response()->json(['status' => true, 'leadData' => $leadsList, 'message' => 'Data Found'], 200);
        }

        return response()->json(['status' => true, 'leadData' => [], 'message' => 'No data found'], 200);
    }

    /**
     * Apply filters to the leads query based on request inputs
     */
    protected function applyFilters($query, Request $request)
    {
        if ($pincode = $request->pincode) {
            $query->where('leads.pin_code', 'like', '%' . $pincode . '%');
        }

        if ($category = $request->category_id) {
            $query->where('leads.category_id', $category);
        }

        if ($subcategory = $request->subcategory_id) {
            $query->where('leads.subcategory_id', $subcategory);
        }

        if ($district = $request->district_name) {
            $query->where('leads.district_name', 'like', '%' . $district . '%');
        }

        if ($state = $request->state_name) {
            $query->where('leads.state_name', 'like', '%' . $state . '%');
        }
    }

    /**
     * Transform lead data to return as response
     */
    protected function transformLeadData($leadData)
    {
        return $leadData->map(function ($lead) {
            $answerData = json_decode($lead->answers, true);
            $answerId = is_array($answerData) && !empty($answerData) ? $answerData[0] : null;

            return [
                'id' => $lead->id,
                'name' => $lead->name,
                'email' => "XXXXXXXX@XXXX.XXX",
                'mobile' => 'XXXXXXXXXX',
                'category' => $lead->category_name,
                'subcategory' => $lead->subcategory_name,
                'gender' => $lead->gender,
                'pincode' => $lead->pincode,
                'points' => $lead->points ?? 0,
                'hot_lead' => 'Fresh',
                'lead_date' => $lead->created_at,
                'district' => $lead->district_name,
                'state' => $lead->state_name,
                'answerData' => $answerId,
                'bought_times' => $lead->bought_times
            ];
        })->toArray();
    }





    public function LeadDetails($id){

        $leadData = Leads::select('leads.*', 'sub_categories.slug as subcategory_name', 'categories.slug as category_name', 'prices.points', 'prices.subcategory_id')
            ->leftJoin('categories', 'categories.id', '=', 'leads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'leads.subcategory_id')
            ->leftJoin('prices', 'prices.subcategory_id', 'leads.subcategory_id')
            ->leftJoin('location', 'location.id', 'leads.location_id')
            ->where('leads.id', $id)
            ->get();


        if ($leadData->count() > 0) {
            $profileVisit = DB::table('profile_visit')->where('lead_id', $id)->first();
            if (!$profileVisit) {
                DB::table('profile_visit')->insert([
                    'lead_id' => $id,
                    'leads_clicks' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            } else {
                // If a record exists, increment the profile_visit count
                DB::table('profile_visit')->where('lead_id', $id)->increment('leads_clicks', 1);
            }
        }

        if ($leadData->count() > 0) {
            foreach ($leadData as $lead) {

                $answer = $lead->answers;
                $answerData = json_decode($answer);

                $leads_list[] = [
                    'id' => $lead->id,
                    'name' => $lead->name,
                    'email' => "XXXXXXXX@XXXX.XXX",
                    'mobile' => 'XXXXXXXXXX',
                    'category' =>  $lead->subcategory_name,
                    'subcategory' => $lead->category_name,
                    'gender' => $lead->gender,
                    'pincode' => $lead->pin_code,
                    'points' => isset($lead->points) ? $lead->points : '0',
                    'hot_lead' => 'Fresh',
                    'lead_date' => $lead->created_at,
                    'questions' => $answerData,
                    'district' => $lead->district_name,
                    'state' => $lead->state,
                    'area_name'=> $lead->area_name,
                    'bought_times' => $lead->bought_times
                ];
            }

            return response()->json(['leadData' => $leads_list, 'success'=> true, 'Message' => 'Data Found'], 200);
        }
        return response()->json(['leadData' => 0, 'success' => false, 'message' => 'No data found'], 200);
    }



    public function buyLeads($id){

        $leadId = $id;

        $userData = Auth::user();
        $userId = $userData->id;
        $checkLeadPurchased = PurchaseLeadDetails::where('user_id', $userId)->where('lead_id', $leadId)->count();

        if ($checkLeadPurchased == 0) {
            $check_amount = Wallet::where('user_id', $userId)->first();

            // Check if wallet amount is null or zero
            if (!$check_amount || $check_amount->amount <= 0) {
                return response()->json(['status' => false, 'message' => 'You Do not have Sufficient Balance in your Wallet']);
            }

            $leads = Leads::select('leads.id', 'leads.subcategory_id', 'prices.points', 'leads.bought_times', 'leads.mobile', 'leads.name', 'leads.email')
                ->leftJoin('prices', 'prices.subcategory_id', 'leads.subcategory_id')
                ->where('leads.id', $leadId)->first();

            $walletAmount = $check_amount->amount;
            $leadPoints =  $leads->points;
            $bought_times = $leads->bought_times;

            // Check if wallet amount is less than lead points
            if ($walletAmount < $leadPoints) {
                return response()->json(['status' => false, 'message' => 'You Do not have Sufficient Balance in your Wallet']);
            }

            if ($walletAmount >= $leadPoints && $bought_times <= 5) {
                $update = Leads::where('id', $leadId)->where('lead_status', 'NotSold')->first();
                $update->bought_times = $bought_times + 1;

                if ($bought_times == 4) {
                    $update->lead_status = 'Sold';
                } else {
                    $update->lead_status = 'NotSold';
                }
                $update->save();

                $wallet_update = Wallet::where('user_id', $userId)->first();
                $wallet_update->amount = $walletAmount - $leadPoints;
                $wallet_update->save();

                $leadDetails = new PurchaseLeadDetails;
                $leadDetails->lead_id = $leadId;
                $leadDetails->user_id = $userId;
                $leadDetails->created_at = \Carbon\Carbon::now()->toDateTimeString();
                $leadDetails->created_at = \Carbon\Carbon::now()->toDateTimeString();
                $leadDetails->save();

                return response()->json(['status' => true, 'message' => 'Leads brought successfully', 'leadData' => $leads],200);
            } else {
                return response()->json(['status' => false, 'message' => 'You Do not have Sufficient Balance in your Wallet'], 200);
            }
        } else {
            return response()->json(['status' => false, 'message' => 'You Already Purchased this Lead'], 200);
        }
    }


    public function getLeadDetailsbyUser() {
        $leads_list = [];
        $userData = Auth::user();
        $userId = $userData->id;
        $leadData = PurchaseLeadDetails::select('purchage_lead_details.lead_id', 'purchage_lead_details.created_at as bought_on', 'leads.*', 'sub_categories.slug as subcategory_name', 'categories.slug as category_name', 'prices.points')
            ->leftJoin('leads', 'leads.id', 'purchage_lead_details.lead_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'leads.subcategory_id')
            ->leftJoin('categories', 'categories.id', 'leads.category_id')
            ->leftJoin('prices', 'prices.subcategory_id', 'leads.subcategory_id')
            ->where('purchage_lead_details.user_id', $userId)
            ->orderBy('purchage_lead_details.created_at', 'DESC')
            ->get();

        if ($leadData) {
            foreach ($leadData as $lead) {
                $answer = $lead->answers;
                $answerData = json_decode($answer);
                $answerId = !empty($answerData) && is_array($answerData) ? $answerData[0] : null;
                $leads_list[] = [
                    'lead_id' => $lead->id,
                    'name' => $lead->name,
                    'email' => $lead->email,
                    'mobile' => $lead->mobile,
                    'category' =>  $lead->category_name,
                    'subcategory' => $lead->subcategory_name,
                    'gender' => $lead->gender,
                    'pincode' => $lead->pin_code,
                    'points' => empty($lead->points) ? 0 : $lead->points,
                    'hot_lead' => 'Fresh',
                    'bought_on' => $lead->bought_on,
                    'district' => $lead->district_name,
                    'state' => $lead->state,
                    'area_name'=> $lead->area_name,
                    'lead_created_on' => $lead->created_at,
                    'category_id' => $lead->category_id,
                    'subcategory_id' => $lead->subcategory_id,
                    'question_data' =>$answerId
                ];
            }
            return response()->json(['status' => true, 'leadData' => $leads_list, 'message' => 'Details Found Successfully'], 200);
        }
        return response()->json(['status' => false, 'leadData' => [], 'message'=> 'No Details Found'], 200);
    }


    public function createOrUpdateFollowUp(Request $request) {
        $user = Auth::user();
        $userId = $user->id;
        $lead_id = $request->lead_id;
        $category_id = $request->category_id;
        $subcategory_id = $request->subcategory_id;
        $date = $request->date;
        $time = $request->time;
        $note = $request->note;
        $convert_comment = $request->convert_comment;
        $convert_status = $request->convert_status;

        $existingFollowUp = followup::where('lead_id', $lead_id)->where('user_id', $userId)->first();

        if ($existingFollowUp) {
            $existingFollowUp->update([
                'convert_status' => $convert_status,
                'convert_comment' => $convert_comment,
                'fdate' => $date,
                'ftime' => $time,
                'fnote' => $note,
                'history' => 1
            ]);
            return response()->json(['success' => true, 'message' => 'Updated Successfully']);
        } else {
            $newFollowUp = new followup([
                'user_id' => $userId,
                'lead_id' => $lead_id,
                'category_id' => $category_id,
                'subcategory_id' => $subcategory_id,
                'convert_status' => $convert_status,
                'convert_comment' => $convert_comment,
                'fdate' => $date,
                'ftime' => $time,
                'fnote' => $note,
                'history' => 1
            ]);
            $newFollowUp->save();
            return response()->json(['success' => true, 'message' => 'Created Successfully']);
        }
    }

    public function getFollowUpsById($leadId) {
        $user = Auth::user();
        $userId = $user->id;

        $followUps = Followup::select('followups.*','leads.subcategory_id', 'sub_categories.slug as subcategory_name', 'categories.slug as category_name', 'leads.category_id')
            ->leftJoin('leads', 'leads.id' ,'followups.lead_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'leads.subcategory_id')
            ->leftJoin('categories', 'categories.id', '=','leads.category_id')
            ->where('followups.lead_id', $leadId)->where('followups.user_id', $userId)->get();

        if ($followUps->isEmpty()) {
            return response()->json(['followUps' => [], 'success' => false, 'message' => 'No follow-up records found.'], 200);
        }

        return response()->json(['followUps' => $followUps, 'success' => true, 'message'=> 'Record Found'], 200);
    }

    public function storeFilter(Request $request){
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 200);
        }

        $filterData = FilterData::updateOrCreate(
            ['created_by' => $user->id],
            [
                'filter_pincode' => isset($request->filter_pincode) ? $request->filter_pincode : null,
                'filter_category_id' => isset($request->filter_category_id) ? $request->filter_category_id : null,
                'filter_sub_category_id' => json_encode($request->filter_sub_category_id),
                'filter_state' => isset($request->filter_state) ? $request->filter_state : null,
                'filter_district' => json_encode($request->filter_district),
            ]
        );

        return response()->json(['success' => true, 'message' => 'Filter data updated successfully'], 200);
    }

    public function getFilterData() {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 200);
        }

        $filterData = FilterData::where('created_by', $user->id)->first();

        if (!$filterData) {
            return response()->json(['success' => false, 'message' => 'Filter data not found'], 200);
        }

        return response()->json(['success' => true, 'message' => 'Filter data retrieved successfully', 'data' => $filterData], 200);
    }


    public function destroyFilter($id){
        $record = FilterData::find($id);
        if (!$record) {
            return response()->json(['status' =>false, 'message' => 'Record not found'], 200);
        }
        $record->delete();
        return response()->json(['status' =>true, 'message' => 'Record deleted successfully']);
    }

    public function getProfileVisitByLeadId($leadId){
        $profileVisit = ProfileVisit::select('lead_id', 'leads_clicks')->where('lead_id', $leadId)->first();

        if ($profileVisit) {
            return response()->json(['profileVisit' => $profileVisit, 'success' => true, 'message' => 'Profile visit data found'], 200);
        }

        return response()->json(['profileVisit' => [], 'success' => false, 'message' => 'No profile visit data found'], 404);
    }






    public function updateLeadStatus(Request $request, $id){

        $data = Leads::where('id', $id)->first();

        $data->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('status', 'Status Updated Successfully');

    }


    /**
     * Create a new lead.
    */
    public function createLead(Request $request){
        // Validation
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:sub_categories,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string|max:15',
            'gender' => 'nullable|in:male,female,other',
            'pin_code' => 'required|string|max:10',
            'lead_status' => 'required|string|in:Open,Closed,Pending',
            'status' => 'required|boolean',
            'district_name' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'location_id' => 'nullable|exists:locations,id',
            'area_name' => 'nullable|string|max:255',
            'answers' => 'nullable|json',
        ]);

        // Return validation errors if they exist
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Store lead data
        $lead = new Lead();
        $lead->user_id = $request->user_id;
        $lead->category_id = $request->category_id;
        $lead->subcategory_id = $request->subcategory_id;
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->mobile = $request->mobile;
        $lead->gender = $request->gender;
        $lead->pin_code = $request->pin_code;
        $lead->lead_status = $request->lead_status;
        $lead->status = $request->status;
        $lead->added_by = auth()->user()->id; // Admin creating the lead
        $lead->district_name = $request->district_name;
        $lead->state = $request->state;
        $lead->location_id = $request->location_id;
        $lead->area_name = $request->area_name;
        $lead->answers = $request->answers;
        $lead->created_at = now();
        $lead->updated_at = now();
        $lead->save();

        // Response
        return response()->json([
            'status' => true,
            'message' => 'Lead created successfully',
            'lead' => $lead
        ], 201);
    }

}
