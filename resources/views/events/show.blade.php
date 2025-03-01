@extends('home') 

@section('title', $event->title)

@section('content') 
  <section class="search-container">
    <section class="search-content">
      <img class="event-img" src="/img/events/{{ $event->image }}" 
      alt="{{ $event->title }}">
      <h1 class="event-title">{{ $event->title }}</h1>
      <h3 id="event-city">{{ $event->city }}</h3>
      <p class="event-date">xx/xx/xxxx</p>
      <p class="content-description">{{ $event->description }}</p>
    </section>
  </section>
@endsection