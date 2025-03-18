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

        <section class="show-items">
          <h3>The event will include</h3>
          <ul class="show-items-ul">
            @foreach($event->items as $item)
            <li class="show-items-li">
              <ion-icon name="checkmark-circle-outline"></ion-icon>{{ $item }}
            </li>
            @endforeach
          </ul>
        </section>

        <section class="show-date">
          <h3 id="show-city">
            <ion-icon name="pin-outline"></ion-icon>{{ $event->city }}
          </h3>
          <p id="show-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
          <p id="show-participants">
            <ion-icon name="people-outline"></ion-icon> Participants: {{ count($event->users) }}
          </p>
        </section>

      </section>

      <section class="show-description">
        <p><ion-icon name="star-outline"></ion-icon> Producer: {{ $eventOwner['name'] }}</p>
        <p>{{ $event->description }}</p>
      </section>
      <form action="/events/join/{{ $event->id }}" method="POST">
        @csrf
        <a class="btn-show" href="/events/join/{{ $event->id }}" id="event-submit"
        onclick="event.preventDefault();
        this.closest('form').submit();">
          Subscribe
        </a>
      </form>
    </section>
  </section>
@endsection