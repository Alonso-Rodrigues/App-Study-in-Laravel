@extends('home')

@section('title', 'Login Page')

@section('content')
    <section class="container-login">
        @if (session('status'))
            <p class="status-message">{{ session('status') }}</p>
        @endif

        <form class="container-login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <label class="login-label" for="email">Email</label>
            <input class="login-input" id="email" type="email" name="email">

            <label class="login-label" for="password">Password</label>
            <input class="login-input" id="password" type="password" name="password">

            <label class="login-label" for="remember_me">
                <input type="checkbox" id="remember_me" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a id="login-forgot" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
            @endif
            <button class="btn-login">{{ __('Login') }}</button>          
        </form>
        
    </section>
@endsection