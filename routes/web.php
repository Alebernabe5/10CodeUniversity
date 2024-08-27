<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EventController;


Route::get('/', [IndexController::class, 'index'])->name('home');

// Route::get('/indexCreate', [IndexController::class, 'create'])->name('index.create');

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/setting', [EventController::class, 'setting'])->name('events.setting');

Route::get('/setting/create', [EventController::class, 'create'])->name('events.create');
Route::post('/setting/store', [EventController::class, 'store'])->name('events.store');
Route::get('/setting/edit/{event}', [EventController::class, 'edit'])->name('events.edit');
Route::put('/setting/update/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/setting/destroy/{event}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');


// Route::resources([
//     'events' => EventController::class,
//     'setting' => EventController::class,
// ]);





