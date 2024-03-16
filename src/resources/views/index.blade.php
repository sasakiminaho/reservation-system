@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="main">
    @if(Auth::check())
    <div class="shop_list">
        <div class="shop_list1">
            @foreach($restaurants as $restaurant)
            <div class="shop">
                <img src="{{ $restaurant['image'] }}" alt="{{$restaurant['shop'] }}" width="70%" height="50%" class="shop-image">
                <div class="shop-name">{{ $restaurant['shop'] }}</div>
                <div class="shop-hashtag">#{{$restaurant['area']}} #{{ $restaurant['genre'] }}</div>
                <div class="button">
                    <a href="{{ route('restaurant.detail',['id' => $restaurant['id'] ] ) }}" class="detail">詳しく見る</a>

                    @php
                    $favorite_flag = false;
                    @endphp

                    @foreach($favorites as $favorite)

                    @if($favorite['restaurant_id']===$restaurant['id'])

                    @php
                    $favorite_flag = true
                    @endphp

                    @break

                    @else

                    @php
                    $favorite_flag = false;
                    @endphp

                    @endif

                    @endforeach



                    @if($favorite_flag)
                    <a href="{{ route('unlike', $restaurant) }}"><img src="{{ asset('img/favo_on.png') }}" alt="" width="25px" height="25px" class="favo"></a>
                    @else
                    <a href="{{ route('like', $restaurant) }}"><img src="{{ asset('img/favo_off.png') }}" alt="" width="25px" height="25px" class="favo"></a>
                    @endif

                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="shop_list">
        <div class="shop_list1">
            @foreach($restaurants as $restaurant)
            <div class="shop">
                <img src="{{ $restaurant['image'] }}" alt="{{$restaurant['shop'] }}" width="70%" height="50%" class="shop-image">
                <div class="shop-name">{{ $restaurant['shop'] }}</div>
                <div class="shop-hashtag">#{{$restaurant['area']}} #{{ $restaurant['genre'] }}</div>
                <div class="button">
                    <a href="{{ route('restaurant.detail', ['id' => $restaurant['id'] ]) }}" class="detail">詳しく見る</a>
                    <a href="{{ route('menu') }}"><img src="{{ asset('img/favo_off.png') }}" alt="" width="20px" height="20px"></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>

@endsection
