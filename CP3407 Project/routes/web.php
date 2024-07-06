<?php

use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('/login',LoginController::class);
Route::resource('/signup', SignUpController::class);
Route::resource('/forgotPassword', forgotPasswordController::class);
Route::resource('/resetPassword', ResetPasswordController::class);
Route::resource('/shop', ShopController::class);
Route::resource('/about', AboutController::class);
Route::resource('/services', ServicesController::class);
Route::resource('/contactUs', ContactUsController::class);

Route::get('/finishSignUp', function(){
    return view('/finishSignUp');
});
