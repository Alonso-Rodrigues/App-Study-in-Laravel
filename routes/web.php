<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');

Route::put('/events/{id}', [EventController::class, 'update'])->middleware('auth');

Route::delete('events/delete/{id}', [EventController::class, 'destroy'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');

Route::get('/', [EventController::class, 'home'] );

Route::get('/contact', [EventController::class, 'contact']);

Route::get('/events', [EventController::class, 'events']);

Route::post('events', [EventController::class, 'store']);

Route::get('/events/{id}', [EventController::class, 'show'] );



