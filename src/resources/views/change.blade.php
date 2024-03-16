@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/change.css') }}">
@endsection

@section('content')
<div class="form">
    <div class="change_form">
        <div class="form_title">
            予約変更フォーム
        </div>
        <div class="change-list">
            <div class="reservation-form">
                <form action="/mypage" method="post" class="reservation-form-box">
                    @csrf
                    <div class="date-box">
                        <input type="date" id ="date" name="date" min="@php echo date('Y-m-d')@endphp" class="date-box-input">
                    </div>
                    <div class="time-box">
                        <input type="time" id="time" name="time" list="data-list" step="1800" class="time-box-input">
                    </div>
                    <div class="number-box">
                        <input type="number" id="number" name="number" min="1" max="100" class="number-box-input">
                    </div>
                    <div class="reservation-confirm">
                        <div class="reservation-confirm-content">
                            <div class="list-name">Shop</div>
                            <div class="list-content">{{$shop['shop']}}</div>
                        </div>
                        <div class="reservation-confirm-content">
                            <div class="list-name">Date</div>
                            <div id="date_box" class="list-content"></div>
                        </div>
                        <div class="reservation-confirm-content">
                            <div class="list-name">Time</div>
                            <div id="time_box" class="list-content"></div>
                        </div>
                        <div class="reservation-confirm-content">
                            <div class="list-name">Number</div>
                            <div id="number_box" class="list-content"></div>
                        </div>
                    </div>
                    <div class="reservation-button">
                        <input type="hidden" name="id" value="{{ $shop['id'] }}">
                        <input type="hidden" name="reservation_id" value="{{ $reservation['id'] }}">
                        <button class="submit">変更する</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            'use strict';
            {
                const $date = document.getElementById('date');
                const $date_box = document.getElementById('date_box');
                $date.addEventListener('input' , function(){
                    $date_box.textContent = this.value;
                })
            }
            {
                const $time = document.getElementById('time');
                const $time_box = document.getElementById('time_box');
                $time.addEventListener('input' , function(){
                    $time_box.textContent = this.value;
                })
            }
            {
                const $number = document.getElementById('number');
                const $number_box = document.getElementById('number_box');
                $number.addEventListener('input' , function(){
                    $number_box.textContent = this.value + '人';
                })
            }
        </script>
        </div>
    </div>
</div>
@endsection