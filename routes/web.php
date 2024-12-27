<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BoardingHouseController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/find-kos', [BoardingHouseController::class, 'find'])->name('find-kos');
Route::get('/check-booking', [BookingController::class, 'check'])->name('check-booking');



