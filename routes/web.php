<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'] );

Route::get('/events', [EventController::class, 'events'] );

Route::get('/product', [EventController::class, 'product']);

Route::get('/contact', [EventController::class, 'contact']);

