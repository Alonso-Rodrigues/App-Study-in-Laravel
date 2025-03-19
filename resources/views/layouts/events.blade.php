@extends('home') 

@section('title', 'Events Page')

@section('content') 
  <section class="events-container">

    <section class="search-container">
      @if($search)
       <h1 class="no-events">Searching for the event: {{ $search }}</h1>
      @endif
      <form class="form-control" action="/events" method="GET">
        <input type="text" name="search" placeholder="search for an event">
        <button class="btn-search" type="submit">Search</button>
      </form>

      @if(count($events) == 0 && $search)
        <h2 class="no-events">Event not found!
          <a href="/events"> See all</a>
        </h2>
        </>
      @elseif(count($events) == 0)
        <h2 class="no-events">There are no events available yet</h2>
      @endif
    </section>

    @if(count($events) > 0)
        <h1 class="event-title">Next Events</h1>
    @endif

    @foreach($events as $event)
      <section class="events-content">
        <section class="events-banner">
          <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
          <p id="event-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
          <button class="content-btn"><a href="/events/{{ $event->id }}">Learn more</a></button>
        </section>
        <section class="events-data">
          <h2 id="event-title">{{ $event->title }}</h2>
          <h3 id="event-city">
            <ion-icon name="pin-outline"></ion-icon>{{ $event->city }}
          </h3>
          <p class="content-description">{{ $event->description }}</p>
        </section>
      </section>
    @endforeach
  </section>

@endsection