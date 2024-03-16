@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="user_name">
    {{ Auth::user()->name }}さん
</div>
<div class="my_page">
    <div class="reservation-mine">
        <div class="reservation-status">
            予約状況
        </div>
        @foreach($reservations as $reservation)
        <div class="reservation-box">
            <div class="reservation-title">
                <p class="reservation_count">
                    <image src="{{ asset('img/clock.png') }}" alt="mail" width="20px" height="20px" class="clock">予約{{$loop->iteration}}</p>
                <p class="reservation_delete">
                    <a href="{{ route('delete',['id' => $reservation['id'] ]) }}">
                        <image src="{{ asset('img/delete.png') }}" alt="mail" width="20px" height="20px">
                    </a>
                </p>
            </div>

            <div class="reservation-detail">
                <p class=detail>Shop</p><p class="detail">{{$reservation->restaurant->shop}}</p>
            </div>
            <div class="reservation-detail">
                <p class="detail">Date</p><p class="detail">{{ $reservation['reserve_date']}}</p>
            </div>
            <div class="reservation-detail">
                <p class="detail">Time</p><p class="detail">{{ $reservation['reserve_time']}}</p>
            </div>
            <div class="reservation-detail">
                <p class="detail">Number</p><p class="detail">{{ $reservation['member']}}</p>
            </div>
            <div class="change"><a href="/change/{{$reservation->restaurant->id}}" class="change_button">予約変更</a></div>
            <div class="review"><a href="/review/{{$reservation->restaurant->id}}" class="review_button">このお店を評価する</a></div>
        </div>
        @endforeach
    </div>
    <div class="favorite">
        <div class="favorite-shop-title">
            お気に入り店舗
        </div>
        <div class="favorite-shop">
        @foreach($favorites as $favorite)
            <div class="favorite_list">
                <div class="shop">
                    <img src="{{ $favorite->restaurant->image }}" alt="{{ $favorite->restaurant->shop }}" width="70%" height="50%" class="shop-image">
                    <div class="shop-name">{{ $favorite->restaurant->shop }}</div>
                    <div class="shop-hashtag">#{{$favorite->restaurant->area}} #{{ $favorite->restaurant->genre }}</div>
                    <div class="button">
                        <a href="{{ route('restaurant.detail',['id' => $favorite->restaurant['id'] ] ) }}" class="shop-detail">詳しく見る</a>

                        @if($favorite['restaurant_id']===$favorite->restaurant['id'])

                        @php
                        $favorite_flag = true
                        @endphp

                        @break

                        @else

                        @php
                        $favorite_flag = false;
                        @endphp

                        @endif

                        @if($favorite_flag)
                        <a href="{{ route('unlike', $favorite->restaurant) }}"><img src="{{ asset('img/favo_on.png') }}" alt="" width="25px" height="25px" class="favo"></a>
                        @else
                        <a href="{{ route('like', $favorite->restaurant) }}"><img src="{{ asset('img/favo_off.png') }}" alt="" width="25px" height="25px" class="favo"></a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection