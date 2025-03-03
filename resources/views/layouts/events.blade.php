@extends('home') 

@section('title', 'Events Page')

@section('content') 
  {-<!-- <section class="search-container">
    <section class="search-content">
      <h1 class="event-title">Search for an event</h1>
      <form action="">
        <input class="form-control" type="text" id="search" name="search" placeholder="search for an event">
      </form>
    </section>
  </section> -->-}

  <section class="events-container">
    <h1 class="event-title">Next Events</h1>
    @foreach($events as $event)
      <section class="events-content">
        <section class="events-banner">
          <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
          <p id="event-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
          <button class="content-btn"><a href="/events/{{ $event->id }}">Learn more</a></button>
        </section>
        <section class="events-data">
          <h2 id="event-title">{{ $event->title  }}</h2>
          <h3 id="event-city">
            <ion-icon name="pin-outline"></ion-icon>{{ $event->city }}
          </h3>
          <p class="content-description">{{ $event->description }}</p>
        </section>
      </section>
    @endforeach
    @if(count($events) == 0)
    <p id="no-events">There are no events available yet</p>
    @endif
  </section>
@endsection