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

// Route::get('/obat', function () {
//     return view('obat');
// })->middleware(['auth', 'verified'])->name('obat');


Route::get('/apotik', [ViewController::class, 'apotik'])->name('apotik');
Route::post('/apotik/connect', [ProfileController::class, 'connectApotik'])->name('apotik-connect');
Route::get('/obat', [ViewController::class, 'obat'])->name('obat');
Route::get('/stok', [ViewController::class, 'stok'])->name('stok');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ViewController::class, 'profile'])->name('profile');
    Route::get('/profile-applied', [ViewController::class, 'profileApplied'])->name('profile-applied');
});

require __DIR__ . '/auth.php';
