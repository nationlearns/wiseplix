<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
})->name('home');
Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/contact-us', function () {
    return view('contactus');
});
Route::get('/category', function () {
    return view('category');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/category', 'viewCategory')->name('category');
    Route::get('/contact-us', 'viewContact')->name('contact-us');
    Route::get('/about-us', 'viewAbout')->name('about-us');
});

Route::post('contact-us', [ContactUsController::class, 'store'])->name('store.contactus');
Route::post('index', [AdminController::class, 'Index'])->name('index');
Route::post('add/cat', [AdminController::class, 'AddCat'])->name('add.cat');
Route::post('store/cat', [AdminController::class, 'storeCat'])->name('store.cat');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
