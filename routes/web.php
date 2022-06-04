<?php

use App\Http\Controllers\aboutus;
use App\Http\Controllers\batches;
use App\Http\Controllers\blog;
use App\Http\Controllers\contactus;
use App\Http\Controllers\cources;
use App\Http\Controllers\gallery;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::controller(aboutus::class)->group(function(){
    route::get('about-us','about_us')->name('about_us');
});


route::controller(cources::class)->group(function(){
    route::get('cources','cources')->name('cources');
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