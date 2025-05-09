<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home'); // Ganti dengan view yang sesuai
})->name('home');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
