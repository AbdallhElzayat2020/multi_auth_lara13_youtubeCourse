<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Frontend routes
Route::prefix('user')->name('user.')->group(function () {

    Route::get('/home', HomeController::class)->middleware(['auth', 'verified'])->name('dashboard');

    Route::view('/login', 'frontend.auth.login');
    Route::view('/register', 'frontend.auth.register');
    Route::view('/forget-password', 'frontend.auth.forget-password');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


