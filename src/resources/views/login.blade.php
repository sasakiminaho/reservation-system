@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login">
    <div class="login-form">
        <div class="login-form_title">
            <p class="title-content">Login</p>
        </div>
        <form action="/login" method="post" class="login-form_input">
            @csrf
            <div class="input">
                <div class="form_input">
                    <p class="email-icon"><image src="{{ asset('img/mail.png') }}" alt="mail" width="20px" height="20px"></p>
                    <input type="email" name="email" class="form" placeholder="Email" value="{{ old('email') }}" autocomplete="off">
                </div>
                <div class="form_error" >
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form_input">
                    <p class="password-icon"><img src="{{ asset('img/password.png') }}" alt="password" width="20px" height="20px"></p>
                    <input type="password"  name="password" class="form" placeholder="Password">
                </div>
                <div class="form_error" >
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="login-button">
                <button type="submit" class="button">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection