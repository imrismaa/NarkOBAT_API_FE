<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [ViewController::class, 'register'])->name('register');
Route::get('/apotik', [ViewController::class, 'apotik'])->name('apotik');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/obat', [ViewController::class, 'obat'])->name('obat');
Route::get('/profile', [ViewController::class, 'profile'])->name('profile');
Route::get('/profile-applied', [ViewController::class, 'profileApplied'])->name('profile-applied');
