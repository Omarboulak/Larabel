<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;

Route::view('/', 'miranda.index')->name('home');

Route::resource('activities', ActivityController::class);

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');

Route::view('/about', 'miranda.about')->name('about');
Route::view('/offers', 'miranda.offers')->name('offers');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
