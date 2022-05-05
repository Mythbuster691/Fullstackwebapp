<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use App\Models\Career;
use App\Http\Controllers\RazorpayPaymentController;
use App\Models\User;
use Symfony\Component\Console\Input\Input;

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
Route::get('/hotels',function(){
    return view('pages.hotel');
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
Route::get('payments',[CareerController::class,'success'])->name('payment.success');
Route::get('interviewdestination',[CareerController::class,'getinterviewdestination']);




Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('file-export', [HomeController::class, 'fileExport'])->name('file-export');
    Route::post('status/{id}',[HomeController::class, 'status'])->name('home.status');

});

Route::get('send-mail', function () {
});

Route::get('razorpay-payment/{id}', [RazorpayPaymentController::class, 'index'])->name('razorpay.index');
Route::any('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
