@extends('home')

@section('title', 'Edit: '. $event->title)

@section('content')
  <section class="edit_container">
    <section class="edit_content">
      <h1 id="edit-event-title">Editing: {{ $event->title }}</h1>
      <form class="edit-form-events" action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf {{-- blade directive against Cross-site request forgery attacks --}}
        @method('PUT')
        <label class="edit-event-label" for="img">Event image</label>
        <div class="edit-container-img">
          <input class="edit-input-img" type="file" id="image" name="image">
          <img class="edit-event-img" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
        </div>

        <label class="edit-event-label" for="date">Event date</label>
        <input class="edit-input-date" type="date" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
        
        <label class="edit-event-label" for="title">Event</label>
        <input class="edit-input-form" type="text" id="title" name="title" placeholder="Event Name" value="{{ $event->title }}">
        
        <label class="edit-event-label" for="title">City</label>
        <input class="edit-input-form" type="text" id="city" name="city" placeholder="Local Event" value="{{ $event->city }}">
        
        <label class="edit-event-label" for="title">Is this event private?</label>
        <select class="edit-event-select" name="private" id="private">
          <option>Selection</option>
          <option value="0">No</option>
          <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Yes</option>
        </select>
          
        <label class="edit-event-label" for="title">Description</label>
        <textarea class="edit-textarea-form" type="text" name="description" id="description" placeholder="What will your event be like?" value="{{ $event->description }}"></textarea>

        <label class="edit-event-label" for="title">Add infrastructure</label>
        <section class="edit-event-items">
          <label><input type="checkbox" name="items[]" value="stage"> VIP Area</label>
          <label><input type="checkbox" name="items[]" value="stereo"> Lounge Seating</label>
          <label><input type="checkbox" name="items[]" value="pick-Ups"> Free Drinks</label>
          <label><input type="checkbox" name="items[]" value="stage lighting"> Free Wi-Fi</label>
        </section>

        <button class="btn-edit" type="submit" value="edit event">Submit</button>
      </form>
    </section>
  </section>
@endsection