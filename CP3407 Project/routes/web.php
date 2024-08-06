<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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
    Route::get('/shop/women', [ShopController::class, 'showWomenProducts'])->name('shop.women');
    Route::get('/shop/women-top', [ShopController::class, 'showWomenTopProducts']);
    Route::get('/shop/women-shorts', [ShopController::class, 'showWomenShortsProducts']);
    Route::get('/shop/men-top', [ShopController::class, 'showMenTopProducts']);
    Route::get('/shop/men-shorts', [ShopController::class, 'showMenShortsProducts']);
    Route::get('/shop/jewelry', [ShopController::class, 'showJewelryProducts']);
    Route::get('/shop/bags', [ShopController::class, 'showBagProducts']);
    Route::get('/shop/men', [ShopController::class, 'showMenProducts'])->name('shop.men');
    Route::get('/shop/accessories', [ShopController::class, 'showAccessoryProducts'])->name('shop.accessory');
    Route::get('/shop/sort', [ShopController::class, 'sortProducts'])->name('sortProduct');
    Route::resource('/about', AboutController::class);
    Route::resource('/services', ServicesController::class);
    Route::resource('/contactUs', ContactUsController::class);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/userProfile', [UserProfileController::class, 'index'])->name('userProfile');
    Route::post('/userProfile', [UserProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/userProfile/update-image', [UserProfileController::class, 'updateImage'])->name('updateProfileImage');
    Route::post('/userProfile/remove-image', [UserProfileController::class, 'removeImage'])->name('removeProfileImage');
    Route::resource('/favorites', FavoritesController::class);
    Route::resource('/orderHistory', OrderHistoryController::class);
    Route::get('/orderHistory', [OrderHistoryController::class, 'index'])->name('orderHistory');
    Route::resource('/cart', CartController::class);
    Route::resource('/checkout', CheckoutController::class);
    Route::resource('/payment', PaymentController::class);
    Route::get('/thankyou', [ThankYouController::class, 'index'])->name('thankyou');
});
