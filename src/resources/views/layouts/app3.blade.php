<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css//layouts/app3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>
<body>
    <div class="reservation">
        <header class="header">
            <div class="header-title">
                <a href="/menu" class="header-title-logo">Rese</a>
            </div>
        </header>
        <div class="reservation-form">
            <div class="reservation-form_title">予約</div>
            <form action="/reservation" method="post" class="reservation-form-box">
                @csrf
                <div class="date-box">
                    <input type="date" id ="date" name="date" min="@php echo date('Y-m-d')@endphp" class="date-box-input">
                </div>
                <div class="form_error" >
                    @error('reserve_date')
                    {{ $message }}
                    @enderror
                </div>
                <div class="time-box">
                    <input type="time" id="time" name="time" list="data-list" step="1800" class="time-box-input">
                </div>
                <div class="form_error" >
                    @error('reserve_time')
                    {{ $message }}
                    @enderror
                </div>
                <div class="number-box">
                    <input type="number" id="number" name="number" min="1" max="100" class="number-box-input">
                </div>
                <div class="form_error_member" >
                    @error('member')
                    {{ $message }}
                    @enderror
                </div>
                <div class="reservation-confirm">
                    <div class="reservation-confirm-content">
                        <div class="list-name">Shop</div>
                        <div class="list-content">{{ $restaurant_detail->shop}}</div>
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
                    <input type="hidden" name="id" value="{{ $restaurant_detail->id}}">
                    <button class="submit">予約する</button>
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
    <main>
        <body>
            @yield('content')
        </body>
    </main>
</body>
</html>