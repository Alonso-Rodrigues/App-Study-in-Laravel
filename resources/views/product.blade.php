@extends('welcome') {{-- Estende o layout principal --}}

@section('title', 'Products Page') {{-- Define o título da página --}}

@section('content') {{-- Define o conteúdo da seção 'content' --}}
    <section class="container_content">
      <h1>Product</h1>
      <p>Showing the product id: {{$id}}</p>
    </section>
@endsection