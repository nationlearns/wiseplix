<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leads;
use App\Models\Categories;
use App\Models\Questions;
use App\Models\QuestionOptions;
use App\Models\User;
use App\Models\Wallet;

class LeadController extends Controller
{
    function showLeads(){
        $data = Leads::latest()->get();
        return view('admin.employee.all-leads.index',compact('data'));
    }


    function createLead(){

        $categories = Categories::get();

        return view('admin.employee.all-leads.create',compact('categories'));

    }


    public function getQuestionsBySubcategory($subcategoryId){
        $questions = Questions::where('subcategory_id', $subcategoryId)
            ->with('options') // Make sure to eager load options for each question
            ->get();

            // If no questions are found, return a response indicating there are no questions
        if ($questions->isEmpty()) {
            return response()->json(['message' => 'No questions available for this subcategory.']);
        }

        return response()->json($questions);
    }


    // function storeLead(Request $request){

    //     $data = $request->all();

    //     return $data;

    //     // Check if a user with the given mobile number or email already exists
    //     $existingUser = User::where('mobile', $data['mobile'])
    //         ->orWhere('email', $data['email'])
    //         ->first();

    //     // Determine if the user is new or existing
    //     $isNewUser = !$existingUser;

    //     // Create or get the user
    //     $user = $this->createUser($data);

    //     $answerArray = [];

    //     // Ensure answers are being processed correctly
    //     if (isset($data['answers']) && is_array($data['answers']) && count($data['answers']) > 0) {
    //         foreach ($data['answers'] as $answerSet) {
    //             // If 'answer' is an array, it means multiple answers for the same question
    //             if (is_array($answerSet['answer'])) {
    //                 foreach ($answerSet['answer'] as $answer) {
    //                     // Append each selected answer as a separate entry
    //                     $answerArray[] = [
    //                         'question' => $answerSet['question'],
    //                         'answer' => $answer,
    //                         'category_id' => $category_id,
    //                         'subcategory_id' => $data['subcategory_id']
    //                     ];
    //                 }
    //             } else {
    //                 // Single answer case
    //                 $answerArray[] = [
    //                     'question' => $answerSet['question'],
    //                     'answer' => $answerSet['answer'],
    //                     'category_id' => $category_id,
    //                     'subcategory_id' => $data['subcategory_id']
    //                 ];
    //             }
    //         }
    //     } else {
    //         // If no answers are provided, add a null entry to the answer array
    //         $answerArray[] = ['question' => null, 'answer' => null];
    //     }


    //     $lead = Leads::create([
    //         'user_id' => $user->id,
    //         'category_id' => $data['category_id'],
    //         'subcategory_id' => $data['subcategory_id'],
    //         'answers' => !empty($answerArray) ? json_encode($answerArray) : null,
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'mobile' => $data['mobile'],
    //         'gender' => $data['gender'],
    //         'lead_status' => 'NotSold',
    //         'status' => '1',
    //         'added_by' => auth()->user()->id,
    //         'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    //         'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
    //         'bought_times' => '0',
    //         'other_query' => $data['comment'],
    //         'location_id' => $data['location_id'],
    //         'pin_code' => $data['pin_code'],
    //         'district_name' => $data['district_name'],
    //         'state' => $data['state'],
    //         'area_name' => $data['area_name'],
    //     ]);

    // }


    // public function storeLead(Request $request) {
    //     // Get the form data
    //     $data = $request->all();

    //     // Check if a user with the given mobile number or email already exists
    //     $existingUser = User::where('mobile', $data['mobile'])
    //         ->orWhere('email', $data['email'])
    //         ->first();

    //     // Determine if the user is new or existing
    //     $isNewUser = !$existingUser;

    //     // Create or get the user
    //     $user = $this->createUser($data);

    //     // Initialize an empty array to store the answers
    //     $answerArray = [];

    //     // Check if answers are provided
    //     if (isset($data['answers']) && is_array($data['answers']) && count($data['answers']) > 0) {
    //         foreach ($data['answers'] as $answerSet) {
    //             // Each answerSet contains a 'question' and 'answer' field
    //             $answers = explode(',', $answerSet['answer']);  // Assuming answers are comma-separated
    //             foreach ($answers as $answer) {
    //                 $answerArray[] = [
    //                     'question' => $answerSet['question'],  // The question
    //                     'answer' => $answer,                   // The individual answer
    //                     'category_id' => $data['category_id'], // The category ID from the form
    //                     'subcategory_id' => $data['subcategory_id'], // The subcategory ID from the form
    //                 ];
    //             }
    //         }
    //     } else {
    //         // If no answers are provided, add a null entry to the answer array
    //         $answerArray[] = ['question' => null, 'answer' => null];
    //     }

    //     // Create the lead entry
    //     $lead = Leads::create([
    //         'user_id' => $user->id,
    //         'category_id' => $data['category_id'],
    //         'subcategory_id' => $data['subcategory_id'],
    //         'answers' => !empty($answerArray) ? json_encode($answerArray) : null,  // Store the answers as a JSON string
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'mobile' => $data['mobile'],
    //         'gender' => $data['gender'],
    //         'lead_status' => 'NotSold',
    //         'status' => '1',
    //         'added_by' => auth()->user()->id,
    //         'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    //         'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
    //         'bought_times' => '0',
    //         'other_query' => $data['comment'],
    //         'location_id' => $data['location_id'],
    //         'pin_code' => $data['pin_code'],
    //         'district_name' => $data['district_name'],
    //         'state' => $data['state'],
    //         'area_name' => $data['area_name'],
    //     ]);

    //     return $lead;
    // }


    public function storeLead(Request $request) {
        // Get the form data
        $data = $request->all();

        // Check if a user with the given mobile number or email already exists
        $existingUser = User::where('mobile', $data['mobile'])
            ->orWhere('email', $data['email'])
            ->first();

        // Determine if the user is new or existing
        $isNewUser = !$existingUser;

        // Create or get the user
        $user = $this->createUser($data);

        // Initialize an empty array to store the answers
        $answerArray = [];

        // Check if the answers are provided and process them
        if (isset($data['answer']) && is_array($data['answer']) && count($data['answer']) > 0) {
            foreach ($data['answer'] as $answerId) {
                // Fetch the question and answer text from the database, assuming `Question` and `Option` models exist
                $option = QuestionOptions::with('question')->find($answerId); // Assuming the answer ID corresponds to a question ID

                // return $option;
                
                // If the question exists, add it to the answer array
                if ($option) {
                    $answerArray[] = [
                        'answer' => $option->title,  // The selected answer ID
                        'question' => $option->question['question_label'],  // Assuming the `text` field holds the question
                        'category_id' => $data['category_id'], 
                        'subcategory_id' => $data['subcategory_id'],
                    ];
                }
            }
        } else {
            // If no answers are provided, add a null entry to the answer array
            $answerArray[] = ['question' => null, 'answer' => null];
        }

        // return json_encode($answerArray);

        // Add additional input if provided
        $additionalInput = isset($data['additional_input']) ? $data['additional_input'] : null;

        // Create the lead entry
        $lead = Leads::create([
            'user_id' => $user->id,
            'category_id' => $data['category_id'],
            'subcategory_id' => $data['subcategory_id'],
            'answers' => !empty($answerArray) ? json_encode($answerArray) : null,  // Store the answers as a JSON string
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
            'lead_status' => 'NotSold',
            'status' => '1',
            'added_by' => auth()->user()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'bought_times' => '0',
            'other_query' => $data['comment'],
            'additional_input' => $additionalInput,  // Store the additional input if it exists
            'location_id' => $data['location_id'],
            'pin_code' => $data['pin_code'],
            'district_name' => $data['district_name'],
            'state' => $data['state'],
            'area_name' => $data['area_name'],
        ]);

        return \redirect('/admin/employee/leads')->with('success', "Lead Added");
    }



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

            $user->markEmailAsVerified();

            // Create a wallet for the new user
            Wallet::create([
                'user_id' => $user->id,
                'amount' => 0.00,
            ]);

            return $user;
        }




}
