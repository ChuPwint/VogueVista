<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('/login',LoginController::class);
Route::resource('/signup', SignUpController::class);
Route::resource('/forgotPassword', forgotPasswordController::class);
Route::resource('/resetPassword', ResetPasswordController::class);
Route::resource('/shop', ShopController::class);
Route::resource('/cart', CartController::class);
Route::resource('/checkout', CheckoutController::class);
Route::resource('/payment', PaymentController::class);
Route::resource('/wishlist', WishlistController::class);
Route::get('/thankyou', function(){
    return view('thankyou');
});

Route::get('/finishSignUp', function(){
    return view('finishSignUp');
});
