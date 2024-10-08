<?php

use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;

/**VENDOR ROUTES */
Route::get('/dashboard',[VendorController::class,'dashboard'])->name('dashboard');
// Route::get('vendor/dashboard',[VendorController::class,'dashboard'])->middleware(['auth','role:vendor'])->name('vendor.dashboard');
Route::get('profile',[VendorProfileController::class,'index'])->name('profile');
Route::put('profile',[VendorProfileController::class,'updateProfile'])->name('profile.update');
Route::post('profile',[VendorProfileController::class,'updatePassword'])->name('profile.update.password');
