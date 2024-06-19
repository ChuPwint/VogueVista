<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/login',LoginController::class);
Route::resource('/signup', SignUpController::class);

Route::get('/finishSignUp', function(){
    return view('/finishSignUp');
});
