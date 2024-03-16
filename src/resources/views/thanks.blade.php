@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks">
    <div class="thanks_box">
        <div class="thanks_message">
            <p class="message">会員登録ありがとうございます</p>
        </div>
        <div class="login_button">
            <a href="/login" class="button">ログインする</a>
        </div>
    </div>
</div>
@endsection