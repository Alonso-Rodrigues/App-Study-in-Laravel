<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Alonso";
    $idade  = 35;
    $profissao = 'programador';

    $arr = [10, 20, 30, 40, 50];

    $names = ["Alonso", "Vanessa", "Rodrigo", "Vovo", "Madrinha"];


    return view('welcome', [
        'nome' => $nome, 
        'idade'=>$idade,
        'profissao' => $profissao,
        'arr' => $arr, 
        'names' => $names
    ]);
});

Route::get('/dicas', function(){
    $nome = "Alonso";
    $idade  = 35;
    $profissao = 'programador';

    $arr = [10, 20, 30, 40, 50];

    $names = ["Alonso", "Vanessa", "Rodrigo", "Vovo", "Madrinha"];


    return view('dicas', [
        'nome' => $nome, 
        'idade'=>$idade,
        'profissao' => $profissao,
        'arr' => $arr, 
        'names' => $names
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});


