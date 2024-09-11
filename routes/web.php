<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('create-account', [PagesController::class, 'createAccount'])->name('create-account');
Route::get('/review-and-confirm', [PagesController::class, 'reviewAndConfirm'])->name('review-and-confirm'); 
Route::get('/my-appointments', [PagesController::class, 'myAppointments'])->name('appointments');      
