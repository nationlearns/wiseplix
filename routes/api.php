<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\BusinessesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\OtpController;
use App\Http\Controllers\Api\LeadsController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\AssociateMessageController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/get-otp', [OtpController::class, 'getOtp']);

Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::get('/user-detail', [LoginController::class, 'UserDetail']);
    Route::put('/get-qleads',[LoginController::class,'Update']);
    Route::post('/update-profile', [LoginController::class, 'UpdateProfile']);
    Route::post('/create-business',[BusinessesController::class,'CreateBusiness']);
    Route::get('/get-business',[BusinessesController::class,'getBusinessDetails']);
    Route::post('/business-key-upload',[BusinessesController::class,'BusinessKycUpload']);
    Route::post('/all-leads',[LeadsController::class, 'getAllLeadList']);
    Route::get('/lead-details/{id}',[LeadsController::class, 'LeadDetails']);
    Route::get('/buy-lead/{id}',[LeadsController::class, 'buyLeads']);
    Route::get('/leads-by-user',[LeadsController::class, 'getLeadDetailsbyUser']);
    Route::post('/recharge-wallet',[TransactionController::class, 'rechargeWallet']);
    Route::get('/get-package', [CategoriesController::class, 'getPackageDetails']);
    Route::post('/add-customer',[BusinessesController::class,'AddCustomer']);
    Route::get('/transaction',[TransactionController::class, 'getTransaction']);
    Route::post('/create-followups',[LeadsController::class, 'createOrUpdateFollowUp']);
    Route::get('/getFollowUpsById/{id}',[LeadsController::class, 'getFollowUpsById']);
    Route::get('/getNotifications',[LeadsController::class, 'getNotificationsByUser']);
    Route::post('/store-filter',[LeadsController::class, 'storeFilter']);
    Route::get('/getFilterData',[LeadsController::class, 'getFilterData']);
    Route::get('/destroyFilter/{id}',[LeadsController::class, 'destroyFilter']);
    Route::post('/update-business/{id}',[BusinessesController::class,'UpdateBusiness']);
    Route::get('/profile-visit/{leadId}', [LeadsController::class, 'getProfileVisitByLeadId']);

    // Show All Message of Associate
    Route::get('/get/all/associate-message/{associate_id}', [AssociateMessageController::class, 'getAssociateMessage']);

    // Show One Message
    Route::get('/get/message/{id}', [AssociateMessageController::class, 'getMessage']);
    

});

Route::post('/associate-message/store', [AssociateMessageController::class, 'store'])->name('associate-message.store');

Route::get('/get-all-category', [CategoriesController::class, 'getAllCategory']);
Route::post('/get-subcategory/{id}', [CategoriesController::class, 'getSubCategory']);
Route::post('/get-location', [CategoriesController::class, 'getLocationDetails']);
Route::post('/get-all-location', [CategoriesController::class, 'getLocation']);
Route::post('/get-questions', [CategoriesController::class, 'getquestionOptions']);
Route::post('/category-search', [CategoriesController::class, 'categorySearch']);
Route::post('/request-otp', [OtpController::class, 'requestForOtpApi']);
Route::post('/validate-otp', [OtpController::class, 'validateOtpApi']);
Route::post('/verifyUserMobile', [OtpController::class, 'verifyUserMobile']);
Route::post('/registerAndSubmitLeadData', [LeadsController::class, 'saveUserQuestionAnswerData']);
Route::get('/blogs',[BlogController::class,'Blogs']);
Route::get('/blogs-deatils/{id}',[BlogController::class,'BlogsDetails']);
Route::get('/faqs',[BlogController::class,'Faqs']);
Route::get('/faqs-details/{id}',[BlogController::class,'FaqsDetails']);

Route::get('/getAllStates', [CategoriesController::class, 'getUniqueStates']);
Route::post('/getDistrictByState', [CategoriesController::class, 'getUniqueDistrictsByState']);