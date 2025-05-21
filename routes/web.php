<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PaymentController;


// Public routes
Route::middleware('web')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    Route::get('/{category}/{id}', [ProductController::class, 'show'])->name('detail');
});

// Guest only (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');
    Route::post('/signup', [RegisterController::class, 'register'])->name('signup.post');

});

// Authenticated only (sudah login)
Route::middleware('auth')->group(function () {
    Route::get('/room', [RoomController::class, 'index'])->name('room');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat');
    // Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/payment', [PaymentController::class, 'show'])->name('payment.show');
    Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
});

Route::get('forgot-password', [\App\Http\Controllers\Auth\PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');


// Search
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Route::get('/password/reset', function () {
//     return view('auth.passwords.email'); // atau halaman reset password kamu sendiri
// })->name('password.request');

// Kategori produk
Route::view('/categories', 'categories')->name('categories');
Route::view('/woman', 'woman')->name('woman');
Route::view('/man', 'man')->name('man');
Route::view('/carpentry', 'carpentry')->name('carpentry');
Route::view('/kids', 'kids')->name('kids');
Route::view('/muslim', 'muslim')->name('muslim');
Route::view('/books', 'books')->name('books');
Route::view('/sports', 'sports')->name('sports');
Route::view('/electronics', 'electronics')->name('electronics');
Route::view('/automotive', 'automotive')->name('automotive');
Route::view('/music', 'music')->name('music');
Route::view('/toys', 'toys')->name('toys');
Route::view('/gadget', 'gadget')->name('gadget');
Route::view('/furniture', 'furniture')->name('furniture');
Route::view('/gaming', 'gaming')->name('gaming');
Route::view('/kitchen', 'kitchen')->name('kitchen');
Route::view('/baby', 'baby')->name('baby');
Route::view('/aboutus', 'aboutus')->name('aboutus');
Route::view('/cart', 'cart')->name('cart');
Route::view('/payment', 'payment')->name('payment');
