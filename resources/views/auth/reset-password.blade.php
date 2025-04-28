@extends('home')

@section('title', 'Reset Password')

@section('content')
    <section class="container-forget-pwd">

        <form class="container-login-form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <label class="login-label" for="email">Email</label>
            <input class="login-input" id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">

            <label class="login-label" for="password">Password</label>
            <input id="password" class="login-input" type="password" name="password" required autocomplete="new-password">

            <label class="login-label" for="password_confirmation">Password Confirmation</label>
            <input id="password_confirmation" class="login-input" type="password" name="password_confirmation" required autocomplete="new-password">

            <button class="btn-login">{{ __('Reset Password') }}</button>          
        </form>
        
    </section>
@endsection
