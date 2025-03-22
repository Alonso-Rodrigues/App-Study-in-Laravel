@extends('home')

@section('title', 'Register Page')

@section('content')
    <section class="container-register">
        <form class="container-register-form" method="POST" action="{{ route('register') }}">
            @csrf
            <label class="register-label" for="name">Name</label>
            <input class="register-input" id="name" type="text" name="name" required>

            <label class="register-label" for="email">Email</label>
            <input class="register-input" id="email" type="email" name="email" required>

            <label class="register-label" for="password">Password</label>
            <input class="register-input" id="password" type="password" name="password" required>

            <label class="register-label" for="password_confirmation">Confirm Password</label>
            <input class="register-input" id="password_confirmation" type="password" name="password_confirmation" required>

            <a id="register-already" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button class="btn-login"> {{ __('Register') }}</button>      
        </form>
    </section>
@endsection