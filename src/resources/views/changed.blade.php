@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done">
    <div class="done_box">
        <div class="done_message">
            <p class="message">予約を変更しました</p>
        </div>
        <div class="return_button">
            <a href="/mypage" class="button">戻る</a>
        </div>
    </div>
</div>
@endsection