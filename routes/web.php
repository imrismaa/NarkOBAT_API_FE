<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/register', [ViewController::class, 'register'])->name('register');
Route::get('/apotik', [ViewController::class, 'apotik'])->name('apotik');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/obat', [ViewController::class, 'obat'])->name('obat');
Route::get('/profile', [ViewController::class, 'profile'])->name('profile');
Route::get('/profile-applied', [ViewController::class, 'profileApplied'])->name('profile-applied');

require __DIR__.'/auth.php';
