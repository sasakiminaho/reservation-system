@extends('layouts.app4')

@section('css')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('content')
<div class="menu">
    <div class="menu-list">
        @if (Auth::check())
        <form action="/menu1" method="post"></form>
        <div class="menu-list-content">
            <a href="/" class="list-name">Home</a>
        </div>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <div class="menu-list-content">
                <button type="submit" class="list-name-logout">Logout</button>
            </div>
        </form>
        <div class="menu-list-content">
            <a href="/mypage" class="list-name">Mypage</a>
        </div>
        @else
        <div class="menu-list-content">
            <a href="/" class="list-name">Home</a>
        </div>
        <div class="menu-list-content">
            <a href="/register" class="list-name">Registration</a>
        </div>
        <div class="menu-list-content">
            <a href="/login" class="list-name">Login</a>
        </div>
        @endif
    </div>
</div>
@endsection