<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::middleware(['auth', 'no-cache'])->group(function () {
    Route::get('/dashboard', [EventController::class, 'dashboard']);
    Route::get('/events/create', [EventController::class, 'create']);
    Route::get('/events/edit/{id}', [EventController::class, 'edit']);
    Route::put('/events/{id}', [EventController::class, 'update']);
    Route::delete('events/delete/{id}', [EventController::class, 'destroy']);
    Route::post('/events/join/{id}', [EventController::class, 'joinEvent']);
    Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent']);
});

Route::get('/', [EventController::class, 'home'] );

Route::get('/contact', [EventController::class, 'contact']);

Route::get('/events', [EventController::class, 'events']);

Route::post('events', [EventController::class, 'store']);

Route::get('/events/{id}', [EventController::class, 'show'] );