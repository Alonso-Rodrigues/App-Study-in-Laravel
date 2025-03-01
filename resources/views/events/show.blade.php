@extends('home') 

@section('title', $event->title)

@section('content') 
  <section class="show-container">
    <section class="show-content">
      <img class="show-img" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
      <section class="show-info">
        <h1 id="show-title">{{ $event->title }}</h1>
        <h3 id="show-city">{{ $event->city }}</h3>
        <p id="show-date">xx/xx/xxxx</p>
        <p id="show-participants">Participants</p>
        <button class="btn-show"><a href="#">Subscribe</a></button>
      </section>
      <section class="show-description">
        <p>The event organizer</p>
        <p>{{ $event->description }}</p>
      </section>
    </section>
  </section>
@endsection