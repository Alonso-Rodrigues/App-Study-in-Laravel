@extends('welcome') {{-- Estende o layout principal --}}

@section('title', 'Create Events Page') {{-- Define o título da página --}}

@section('content') {{-- Define o conteúdo da seção 'content' --}}

    <section class="search-container">
      <h1>Search for an event</h1>
      <form action="">
        <input class="form-control" type="text" id="search" name="search" placeholder="search for an event">
      </form>
    </section>

    <section class="events-container">
      <h1>Next Events</h1>
      @foreach($events as $event)
        <section class="events-content">

          <section class="events-banner">
            <img src="/img/banner.jpg" alt="{{$event->title}}">
            <button class="content-btn"><a href="">Learn more</a></button>
          </section>

          <section class="events-data">
            <p class="event-date"></p>
            <h2>{{$event->title}}</h2>
            <h3>{{$event->city}}</h3>
            <p class="content-description">{{$event->description}}</p>
            <p class="content-participants">Participants</p>
          </section> 

        </section>
      @endforeach
    </section>
@endsection