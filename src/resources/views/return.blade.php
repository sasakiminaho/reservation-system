@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done">
    <div class="done_box">
        <div class="done_message">
            <p class="message">来店後に評価をお願いします。</p>
        </div>
        <div class="return_button">
            <a href="/mypage" class="button">マイページに戻る</a>
        </div>
    </div>
</div>
@endsection