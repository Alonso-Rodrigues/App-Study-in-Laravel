@extends('home') 

@section('title', $event->title)

@section('content') 
  <section class="show-container">
    <section class="show-content">
      <img class="show-img" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
      <section class="show-info">
        <h1 id="show-title">{{ $event->title }}</h1>
        <h3 id="show-city">
          <ion-icon name="pin-outline"></ion-icon>{{ $event->city }}
        </h3>
        <p id="show-date">xx/xx/xxxx</p>
        <p id="show-participants">
          <ion-icon name="people-outline"></ion-icon>Participants
        </p>
        <h3 id="show-city">The event will include:</h3>
        <ul>
          @foreach($event->items as $item)
          <li>{{ $item }}</li>
          @endforeach
        </ul>
        <button class="btn-show"><a href="#">Subscribe</a></button>
      </section>
      <section class="show-description">
        <p><ion-icon name="star-outline"></ion-icon> Producer</p>
        <p>{{ $event->description }}</p>
      </section>
    </section>
  </section>
@endsection