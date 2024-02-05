<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\OtpController;
use App\Http\Controllers\Api\LeadsController;
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

Route::post('/register', [LoginController::class, 'createUser']);
Route::post('/login', [LoginController::class, 'loginUser']);

Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::get('/user-detail', [LoginController::class, 'UserDetail']);
    Route::put('/get-qleads',[LoginController::class,'Update']);
});

Route::get('/get-all-category', [CategoriesController::class, 'getAllCategory']);
Route::get('/get-subcategory/{id}', [CategoriesController::class, 'getSubCategory']);
Route::post('/get-location', [CategoriesController::class, 'getLocationDetails']);
Route::post('/get-questions', [CategoriesController::class, 'getquestionOptions']);
Route::post('/category-search', [CategoriesController::class, 'categorySearch']);
Route::post('/request-otp', [OtpController::class, 'requestForOtpApi']);
Route::post('/validate-otp', [OtpController::class, 'validateOtpApi']);
Route::post('/verifyUserMobile', [OtpController::class, 'verifyUserMobile']);
Route::post('/registerAndSubmitLeadData', [LeadsController::class, 'saveUserQuestionAnswerData']);