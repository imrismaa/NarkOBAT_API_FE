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
Route::get('/obat', [ViewController::class, 'obat'])->name('obat');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ViewController::class, 'profile'])->name('profile');
});

require __DIR__ . '/auth.php';
