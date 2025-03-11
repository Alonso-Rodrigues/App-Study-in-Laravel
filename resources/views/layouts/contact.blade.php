@extends('home')

@section('title', 'Contact Page')

@section('content')
    <section class="container-contact">
      <section class="container-contact-section">
        <h1 id="container-contact-title">Contact us</h1>
        <p class="container-contact-content">
          The project was developed in Laravel to create an event system where users can search, view and manage events. Components were implemented to display events, perform dynamic searches, and structure the interface with Blade templates.
          Recently, Jetstream was added for authentication and login management, bringing greater security and convenience for users to access their accounts.
        </p>
        <a id="container-contact-home" href="/">Back to home</a>
      </section>
    </section>
@endsection