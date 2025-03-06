@extends('home') 

@section('title', 'Events Page')

@section('content') 
  <section class="events-container">

    <h1 class="event-title">Next Events</h1>
    <section class="search-container-search">
      @if($search)
       <h1 class="event-title-search">Search for an event: {{ $search }}</h1>
      @endif
      <form action="/events" method="GET">
        <input class="form-control" type="text" id="search" name="search" placeholder="search for an event">
      </form>
    </section>

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
    @if(count($events) == 0 && $search)
      <p id="no-events">Event not found with {{ $search }}!
        <a href="/events">See all</a>
      </p>
    @elseif(count($events) == 0)
      <p id="no-events">There are no events available yet</p>
    @endif
  </section>

@endsection