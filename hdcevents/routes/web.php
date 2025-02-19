<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Alonso";
    $idade  = 35;
    $profissao = 'programador';

    return view('welcome', ['nome' => $nome, 'idade'=>$idade, 'profissao' => $profissao]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});


