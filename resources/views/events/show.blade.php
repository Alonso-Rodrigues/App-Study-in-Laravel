@extends('home')

@section('title', $event->title)

@section('content')
  <section class="show-container">
    <section class="show-content">

      <section class="show-title-img">
        <h1 id="show-title">{{ $event->title }}</h1>
        <img class="show-img" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
      </section>

      <section class="show-info">
        <h3 id="show-city">
          <ion-icon name="pin-outline"></ion-icon>{{ $event->city }}
        </h3>
        <p id="show-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
        <p id="show-participants">
          <ion-icon name="people-outline"></ion-icon> Participants
        </p>
        <h3 id="show-include">The event will include:</h3>
        <ul class="show-items">
          @foreach($event->items as $item)
          <p>
            <ion-icon name="checkmark-circle-outline"></ion-icon>{{ $item }}
          </p>
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








<!-- 
  <section class="show-container">
    <section class="show-content">
      <img class="show-img" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
      <section class="show-info">
        <h1 id="show-title">{{ $event->title }}</h1>
        <h3 id="show-city">
          <ion-icon name="pin-outline"></ion-icon>{{ $event->city }}
        </h3>
        <p id="show-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
        <p id="show-participants">
          <ion-icon name="people-outline"></ion-icon> Participants
        </p>
        <h3 id="show-city">The event will include:</h3>
        <ul class="show-items">
          @foreach($event->items as $item)
          <p>
            <ion-icon name="checkmark-circle-outline"></ion-icon>{{ $item }}
          </p>
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
-->