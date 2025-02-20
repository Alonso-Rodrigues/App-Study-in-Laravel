<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.content');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/{id}', function ($id) {
    return view('product', ['id'=>$id]);
});

Route::get('/contact', function () {
    return view('contact');
});

