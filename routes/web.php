<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

Route::get('/', [EventController::class, 'home'] );

Route::get('/contact', [EventController::class, 'contact']);

Route::get('/events', [EventController::class, 'events']);

Route::post('events', [EventController::class, 'store']);

Route::get('/events/{id}', [EventController::class, 'show'] );

Route::delete('events/{id}', [EventController::class, 'destroy']);

