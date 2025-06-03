<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomController;
 
Route::get('/', function () {
    return view('welcome');
});

Route::resource('rooms', ActivityController::class);
Route::resource('rooms', RoomController::class);


Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/activities/{id}', [ActivityController::class, 'show'])->name('activities.show');
Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
Route::get('/activities/edit/{id}', [ActivityController::class, 'edit'])->name('activities.edit');

Route::get('/rooms', [ActivityController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{id}', [ActivityController::class, 'show'])->name('rooms.show');
Route::get('/rooms/create', [ActivityController::class, 'create'])->name('rooms.create');
Route::get('/rooms/edit/{id}', [ActivityController::class, 'edit'])->name('rooms.edit');