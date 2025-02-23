@extends('welcome') {{-- Estende o layout principal --}}

@section('title', 'ARA Events') {{-- Define o título da página --}}

@section('content') {{-- Define o conteúdo da seção 'content' --}}
    <section class="container-content">
        <h1>Welcome</h1>
        <p class="content">
            ARA Events is a space dedicated to the underground scene, blending music, culture, and awareness. Our mission is to create authentic and immersive experiences where electronic beats meet the vibrant energy of raves, the groove of reggae, and events focused on sustainability and environmental consciousness.
            Here, music goes beyond entertainment—it’s a tool for connection, expression, and transformation.
        </p>
        <div class="btn-content">
            <button><a href="/events">Events</a></button>
            <button><a href="/product">Products</a></button>
        </div>
    </section>
@endsection