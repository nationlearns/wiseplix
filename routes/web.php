<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Blogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = DB::table('categories')
    ->whereIn('slug', [
        'Phography&Videography',
        'Packers-and-Movers',
        'Events',
        'Lawyer-and-Legal-Services',
        'Chartered-Accountants-and-Auditors'
    ])
    ->where('status', 1)
    ->paginate(5);
    $blog = Blogs::latest()->paginate(3);
    return view('welcome', compact('data','blog'));
})->name('home');

Route::get('/update-pass', function () {
    return view('aboutus');
});

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::get('/data-deletion-request', function() {

    echo "<p style='font-size:18px;'>Instructions for Requesting Data Deletion To request data deletion, users may send an email to contact@wiseplix.com from the email address that is valid or registered with the app data. The subject line of the email should read 'Wiseplix | Data Deletion Request' and the email should include all necessary details. </br> </br>
    ﻿Read Our Privacy Policy to Understand Data Use We take our users' privacy seriously and are committed to protecting their personal information. To better understand how your data is used by us or our app, we encourage you to read our privacy policy. Our policy provides a detailed explanation of the types of data we collect, how we use it, and who we share it with. We also outline the measures we take to ensure the security and confidentiality of your information. By familiarizing yourself with our privacy policy, you can be assured that your personal information is being handled in a responsible and transparent manner. If you have any questions or concerns about our policy or how your data is being used, please do not hesitate to contact us. We value your trust and appreciate the opportunity to serve you.<p>";exit;

});

Route::get('/contact-us', function () {
    return view('contactus');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/terms-and-condition', function () {
    return view('termsandcondition');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/category', 'viewCategory')->name('category');
    Route::get('/contact-us', 'viewContact')->name('contact-us');
    Route::get('/about-us', 'viewAbout')->name('about-us');
    Route::get('/blogs', 'Blogs')->name('blogs');
    Route::get('/all-category','AllCategory')->name('all.category');
    Route::get('category/{slug}','CategoryView')->name('category.view');
    Route::get('associate/profile/{id}','AssProfile')->name('associate.profile');
    Route::get('blos/details/{slug}','BlogsDetails')->name('blos.details');
    Route::get('listing/{id}','Listing')->name('listing');
});

Route::post('contact-us', [ContactUsController::class, 'store'])->name('store.contactus');
Route::post('index', [AdminController::class, 'Index'])->name('index');
Route::post('add/cat', [AdminController::class, 'AddCat'])->name('add.cat');
Route::post('store/cat', [AdminController::class, 'storeCat'])->name('store.cat');


Route::get('/dashboard', function () {
    $data = DB::table('categories')
    ->whereIn('slug', [
        'Phography&Videography',
        'Packers-and-Movers',
        'Events',
        'Lawyer-and-Legal-Services',
        'Chartered-Accountants-and-Auditors'
    ])
    ->where('status', 1)
    ->paginate(5);
    $blog = Blogs::latest()->paginate(3);
    return view('dashboard', compact('data','blog'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','role:user'])->group(function () {
    Route::get('user/logout',[UserController::class,'UserLogout'])->name('user.logout');
    Route::get('profile',[UserController::class,'Profile'])->name('profile');
});
Route::get('/subcategory/ajax/{category_id}' , [PriceController::class,'GetSubCategory']);
Route::get('/question/ajax/{subcategory_id}' , [PriceController::class,'GetQuestion']);
Route::get('/questionotion/ajax/{question_id}' , [PriceController::class,'GetQuestionOtion']);

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('contact-us', [AdminController::class, 'ContactUs'])->name('admin.contact.us');

    Route::controller(BackendController::class)->group(function () {
        Route::get('all/category', 'AllCategory')->name('admin.all.category');
        Route::get('all/subcategory', 'AllSubCategory')->name('admin.all.subcategory');
        Route::get('all/blogs', 'AllBlogs')->name('admin.all.blogs');
        Route::get('add/blogs', 'AddBlogs')->name('admin.add.blogs');
        Route::post('store/blog', 'StoreBlog')->name('admin.store.blog');
        Route::get('edit/blogs/{id}', 'EditBlogs')->name('edit.blogs');
        Route::post('update/blog', 'UpdateBlog')->name('admin.update.blog');
        Route::get('delete/blogs/{id}', 'DeleteBlogs')->name('delete.blogs');
        Route::get('faqs',  'Faqs')->name('admin.all.faqs');
        Route::get('all/faqs', 'AddFaqs')->name('admin.add.faqs');
        Route::post('store/faqs', 'StoreFaqs')->name('admin.store.faqs');
        Route::get('edit/faqs/{id}', 'EditFaqs')->name('admin.edit.faqs');
        Route::post('update/faqs', 'UpdateFaqs')->name('admin.update.faqs');
        Route::get('delete/faqs/{id}', 'DeleteFaqs')->name('admin.delete.faqs');
        Route::get('all/users', 'AllUsers')->name('admin.all.users');
        Route::get('users/profile/{id}', 'UserProfile')->name('users.profile');
        Route::get('/all/questions','Questions')->name('all.questions');
        Route::get('add/question','AddQuestion')->name('add.question');
        Route::get('/question/{question_id}/options','showOption')->name('show.question.options');
        Route::get('/question/{question_id}/add-options', 'showAddOptionPage')->name('add.question.option');
        Route::post('/question/{question_id}/add-options/store', 'storeOptions')->name('store.question.option');

        Route::get('option/{option_id}', 'getOption');
        Route::patch('option/{option_id}/update', 'updateOption')->name('option.update');
        Route::delete('option/{option_id}/delete', 'deleteOption')->name('option.delete');

        Route::post('store/question', 'StoreQuestion')->name('store.question');
        Route::get('edit/question/{id}','EditQuestion')->name('edit.question');
        Route::post('update/question', 'UpdateQuestion')->name('update.question');
        Route::get('delete/question/{id}','DeleteQuestion')->name('delete.question');
       
    });
    Route::controller(PriceController::class)->group(function(){
        Route::get('all/price','AllPrice')->name('all.price');
        Route::get('add/price','AddPrice')->name('add.price');
        Route::post('store/price', 'StorePrice')->name('store.price');
        Route::get('edit/price/{id}','EditPrice')->name('edit.price');
        Route::post('update/price', 'UpdatePrice')->name('update.price');
        Route::get('delete/price/{id}','DeletePrice')->name('delete.price');
        Route::get('all/leads','AllLeads')->name('all.leads');
        Route::get('add/leads','AddLeads')->name('add.leads');
    });
});
require __DIR__ . '/auth.php';
