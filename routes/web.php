<?php

use App\Http\Controllers\aboutus;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\batches;
use App\Http\Controllers\blog;
use App\Http\Controllers\contactus;
use App\Http\Controllers\cources;
use App\Http\Controllers\gallery;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Manager;
use App\Http\Controllers\welcomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[welcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

route::controller(aboutus::class)->group(function(){
    route::get('about-us','about_us')->name('about_us');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/request_mail', [welcomeController::class, 'mail'])->name('request_mail');

route::controller(cources::class)->group(function(){
    route::get('cources','cources')->name('cources');
    route::get('details/{id}','details')->name('details');
    route::get('pdf/{file}/{course}','download_pdf')->name('download_pdf');
});


route::controller(batches::class)->group(function(){
    route::get('batches','batches')->name('batches');
});


route::controller(gallery::class)->group(function(){
    route::get('gallery','gallery')->name('gallery');
});


route::controller(contactus::class)->group(function(){
    route::get('contact-us','contact_us')->name('contact_us');
});


Route::middleware(['auth', 'user-access:admin','verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    
    Route::get('/batch/add', [AdminController::class, 'add_batch'])->name('add_batch');
    Route::any('/batch/create', [AdminController::class, 'create_batch'])->name('create_batch');
    Route::get('/batch/update/{id}', [AdminController::class, 'update_batch'])->name('update_batch');
    Route::get('/batch/list', [AdminController::class, 'batch_list'])->name('batch_list');
    Route::get('/batch/delete/{id}', [AdminController::class, 'batch_delete'])->name('batch_delete');

    Route::get('/course/add', [AdminController::class, 'add_course'])->name('add_course');
    Route::any('/course/create', [AdminController::class, 'create_course'])->name('create_course');
    Route::get('/course/update/{id}', [AdminController::class, 'update_course'])->name('update_course');
    Route::get('/course/list', [AdminController::class, 'course_list'])->name('course_list');
    Route::get('/course/delete/{id}', [AdminController::class, 'course_delete'])->name('course_delete');

    Route::get('/instructor/add', [AdminController::class, 'add_instructor'])->name('add_instructor');
    Route::any('/instructor/create', [AdminController::class, 'create_instructor'])->name('create_instructor');
    Route::get('/instructor/update/{id}', [AdminController::class, 'update_instructor'])->name('update_instructor');
    Route::get('/instructor/list', [AdminController::class, 'instructor_list'])->name('instructor_list');
    Route::get('/instructor/delete/{id}', [AdminController::class, 'instructor_delete'])->name('instructor_delete');

    Route::get('/request/list', [AdminController::class, 'request_list'])->name('request_list');
    Route::get('/request/delete/{id}', [AdminController::class, 'request_delete'])->name('request_delete');
    Route::get('/request/update/{id}', [AdminController::class, 'request_update'])->name('request_update');
    route::get('pdf/{id}',[AdminController::class, 'delete_pdf'])->name('delete_pdf');
    route::get('request_data',[AdminController::class, 'requestData'])->name('requestData');
});

Route::middleware(['auth', 'user-access:manager','verified'])->prefix('manager')->name('manager.')->group(function () {
    Route::get('/home', [Manager::class, 'index'])->name('home');

    Route::get('/request/list', [Manager::class, 'request_list'])->name('request_list');
    Route::get('/request/update/{id}', [Manager::class, 'request_update'])->name('request_update');
});

Route::middleware(['auth', 'user-access:user','verified'])->prefix('user')->name('user.')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

route::post('selected_delete',[AdminController::class ,'selected_delete'])->name('selected_delete');
