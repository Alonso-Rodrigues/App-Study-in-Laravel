@extends('home')

@section('title', 'Create Events Page')

@section('content')

<section class="create_container">
  <section class="create_content">
    <h1 id="create-event-title"> Create Your Event!</h1>
    <form class="create-form-events" action="/events" method="POST" enctype="multipart/form-data">
      @csrf {{-- blade directive against Cross-site request forgery attacks --}}

      <label class="create-event-label" for="img">Event image</label>
      <input class="create-input-img" type="file" id="image" name="image">
      
      <label class="create-event-label" for="title">Event</label>
      <input class="create-input-form" type="text" id="title" name="title" placeholder="Event Name">
      
      <label class="create-event-label" for="title">City</label>
      <input class="create-input-form" type="text" id="city" name="city" placeholder="Local Event">
      
      <label class="create-event-label" for="title">Is this event private?</label>
      <select class="create-event-select" name="private" id="private">
        <option>Selection</option>
        <option value="0">No</option>
        <option value="1">Yes</option>
      </select>
        
      <label class="create-event-label" for="title">Description</label>
      <textarea class="create-textarea-form" type="text" name="description" id="description" placeholder="What will your event be like?"></textarea>

      <button class="btn-create" type="submit" value="create event">Submit</button>
    </form>
  </section>
</section>
  <section class="create_container">

  </section>
@endsection