<?php

use App\Http\Controllers\Admin\AdminForgetPasswordController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;


/* ================= Authenticated and Protected Routes ================= */
Route::prefix('admin/')->name('admin.')->middleware('admin_auth')->group(function () {

    /* Home dashboard Route */
    Route::get('/dashboard', AdminHomeController::class)->name('dashboard');

    /* Logout From Admin */
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');


});

/* ================= Guest Routes ================= */
Route::prefix('admin/')->name('admin.')->middleware('guest')->group(function () {

    /* Handle Login */
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('handle-login', [AuthController::class, 'submitLogin'])->name('login.submit');

    /* Forget Password */
    Route::get('forgot-password', [AdminForgetPasswordController::class, 'showForgetForm'])->name('showForgetForm');
//    Route::post('forgot-password', [AdminForgetPasswordController::class, 'send'])->name('showForgetForm');

});



