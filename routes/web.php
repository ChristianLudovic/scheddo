<?php

use App\Http\Controllers\googleAuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

//public routes
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/select-services', [PagesController::class, 'selectServices'])->name('select-services');
Route::get('/select-time', [PagesController::class, 'selectTime'])->name('select-time');
Route::get('/create-account', [PagesController::class, 'createAccount'])->name('create-account');

//google auth routes
Route::get('/auth/google', [googleAuthController::class, 'redirectToGoogle'])->name('google-login');
Route::get('/auth/google/callback', [googleAuthController::class, 'handleGoogleCallback']);

//protected routes
Route::get('/review-and-confirm', [PagesController::class, 'reviewAndConfirm'])->name('review-and-confirm'); 
Route::get('/my-appointments', [PagesController::class, 'myAppointments'])->name('appointments');  
    
