@extends('home')

@section('title', 'Create Events Page')

@section('content')

<section class="container_create">
  <section class="create_content">
    <h1 id="create-event-title"> Create Your Event!</h1>
    <form class="form-create-events" action="/events" method="POST">
      <label class="create-event-label" for="title">Event:
      </label>
      <input class="input-form-create" type="text" id="title" placeholder="Event Name">
      
        <label class="create-event-label" for="title">Event: </label>
        <input class="input-form-create" type="text" id="title" placeholder="Event Name">
      
        <label class="create-event-label" for="title">Event: </label>
        <input class="input-form-create" type="text" id="title" placeholder="Event Name">
      
        <label class="create-event-label" for="title">Event: </label>
        <input class="input-form-create" type="text" id="title" placeholder="Event Name">
    </form>
  </section>
</section>
  <section class="container_create">

  </section>

@endsection