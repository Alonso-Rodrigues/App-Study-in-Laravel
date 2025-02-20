<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body >
        <h2>1 - Como fazer comentarios no Blade</h2>
        <h3>"Utilise Inspecionar"</h3>
            <!-- Teste alonso (esse não) --> 
            {{-- Este é o comentario a ser feito --}}
        
        <hr>

          <h2>2 - Chamando a variavel do router</h2>
          <p>{{$nome}}</p>
          
        <hr>

        <h2>3 - Usando o if</h2>

        @if(10 > 5)
            <p>A condição é true</p>
        @endif       
        
        <hr>
        <h2>4 - If mudando a variavel diretamente na view</h2>

        @if($nome == "Pedro")
            <p>O nome é Pedro</p>

                @elseif($nome == "Alonso")
                    <p>O nome é {{$nome}} e ele tem {{$idade}} anos, ele trabalha como {{$profissao}}</p>
                @else
            
            <p>O nome não é Pedro</p>
        @endif

        <hr>
        <h2>5 - Usando o loop for</h2>
        
        @for($i = 0; $i < count ($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
            <p>O 'i' é = 2!</p>
            @endif
        @endfor
        
        <hr>

        <h2>6 - Usando tags PHP diretamente no Blade</h2>
        @php
            $name = 'Pedro';
            echo($name);
        @endphp
        
        <hr>
        
        <h2>7 - Usando o foreach</h2>
        
        @foreach($names as $nome)
            {{-- loop injetado pelo proprio Blade --}}
            <p>{{$loop -> index}}</p>
            <p>{{$nome}}</p>
        @endforeach

        <hr>

    </body>
</html>