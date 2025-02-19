<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style></style>
    </head>
    <body >
        <h1>Test</h1>
        @if(10 > 15)
            <p>A condição é true</p>
        @endif
        

        <p>{{$nome}}</p>

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Alonso")
        <p>O nome é {{$nome}} e ele tem {{$idade}} anos, ele trabalha como {{$profissao}}</p>
        @else
        <p>O nome não é Pedro</p>
        @endif


    </body>
</html>
