@extends('welcome') {{-- Estende o layout principal --}}

@section('title', 'ARA Events') {{-- Define o título da página --}}

@section('content') {{-- Define o conteúdo da seção 'content' --}}
    <section class="container_content">
        <h1>Welcome Page ARA Events</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
    </section>
    <section class="container_content">
        <h1>Next Events</h1>
        @foreach($events as $event)
            <h2>{{$event->title}}</h2>
            <p>{{$event->description}}</p>
        @endforeach
    </section>
@endsection