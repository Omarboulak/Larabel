<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
 
Route::get('/', function () {
    return view('welcome');
});

Route::resource('activities', ActivityController::class);


Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/activities/{id}', [ActivityController::class, 'show'])->name('activities.show');
Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
Route::get('/activities/edit/{id}', [ActivityController::class, 'edit'])->name('activities.edit');