<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'home'] );

Route::get('/events/create', [EventController::class, 'create'] );

Route::post('events', [EventController::class, 'store']);

Route::get('/contact', [EventController::class, 'contact']);

Route::get('/events', [EventController::class, 'events']);

