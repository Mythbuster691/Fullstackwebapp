<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Mail;

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
    return view('layouts.app');
});

Route::get('/taglines',function(){
    return view('pages.taglines');
});
Route::get('/studyvisa',function(){
    return view('pages.study-visa');
});
Route::get('/exchange',function(){
    return view('pages.foreignexchange');
});
Route::get('/ticket',function(){
    return view('pages.ticketing');
});
Route::get('/us',function(){
    return view('pages.whyus');
});
Route::get('/insurance',function(){
    return view('pages.insurance');
});
Route::get('/insurance',function(){
    return view('pages.insurance');
});
Route::get('/about',function(){
    return view('pages.aboutus');
});

Route::resource('career',CareerController::class);

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('status/{id}',[HomeController::class, 'status'])->name('home.status');

});

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from taruntest@gmail.com',
        'body' => 'This is testing email to send the application status of a user'
    ];

    \Mail::to('tarunicool123@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");

});

