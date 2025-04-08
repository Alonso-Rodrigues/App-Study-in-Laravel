@extends('home')

@section('title', 'Forgotten Password')

@section('content')
    <section class="container-forget-pwd">

        @if (session('status'))
            <p class="status-message">{{ session('status') }}</p>
        @endif

        <form class="container-login-form" method="POST" action="{{ route('password.email') }}">

            <p id="text-forget-pwd">
                Forgot your password? No problem. 
                Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </p>
            @csrf
            <label class="login-label" for="email">Email</label>
            <input class="login-input" id="email" type="email" name="email">

            <button class="btn-login">{{ __('Password Reset') }}</button>          
        </form>
        
    </section>
@endsection
