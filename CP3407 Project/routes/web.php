<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ThankYouController;
use App\Http\Controllers\OrderHistoryController;
use Illuminate\Support\Facades\Route;


Route::withoutMiddleware('auth')->group(function () {
    // Home route
    Route::get('/', [HomeController::class, 'index']);

    //Login using info from signup
    // Route::resource('/login', LoginController::class);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    //Login using google
    Route::get('/auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('auth.google.callback');

    Route::resource('/signup', SignUpController::class);

    Route::get('/forgotPassword', [forgotPasswordController::class, 'index']);
    Route::post('/forgotPassword/send', [forgotPasswordController::class, 'sendVerificationCode'])->name('sendCode');
    Route::post('/forgotPassword/verify', [forgotPasswordController::class, 'store'])->name('verifyCode');

    Route::resource('/resetPassword', ResetPasswordController::class);
    Route::get('/finishSignUp', function () {
        return view('finishSignUp');
    });

    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    Route::get('/shop/sort', [ShopController::class, 'sortProducts'])->name('sortProduct');
    Route::resource('/about', AboutController::class);
    Route::resource('/services', ServicesController::class);
    Route::resource('/contactUs', ContactUsController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('/userProfile', UserProfileController::class);
    Route::post('/update-profile', [UserProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::resource('/favorites', FavoritesController::class);
    Route::resource('/orderHistory', OrderHistoryController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/cart', CartController::class);
    Route::resource('/checkout', CheckoutController::class);
    Route::resource('/payment', PaymentController::class);
    Route::resource('/wishlist', WishlistController::class);
    Route::get('/thankyou', [ThankYouController::class, 'index'])->name('thankyou');
});
