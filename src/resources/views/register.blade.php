@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="registration">
    <div class="registration-form">
        <div class="registration-form_title">
            <p class="title-content">Registration</p>
        </div>
        <form action="/register" method="post" class="registration-form_input">
            @csrf
            <div class="input">
                <div class="form_input">
                    <p class="username-icon"><img src="{{ asset('img/user.png') }}" alt="user" width="20px" height="20px"></p>
                    <input type="text" name="name" class="form" placeholder="Username" value="{{ old('name') }}" >
                </div>
                <div class="form_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form_input">
                    <p class="email-icon"><image src="{{ asset('img/mail.png') }}" alt="mail" width="20px" height="20px"></p>
                    <input type="email" name="email" class="form" placeholder="email" value="{{ old('email') }}">
                </div>
                <div class="form_error" >
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form_input">
                    <p class="password-icon"><img src="{{ asset('img/password.png') }}" alt="password" width="20px" height="20px"></p>
                    <input type="password" name="password" class="form" placeholder="Password" value="{{ old('password') }}">
                </div>
                <div class="form_error" >
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="registration-button">
                <button type="submit" class="button">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection