@extends('layouts.app3')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="shop_detail">
    <div class="shop_detail-box">
        <div class="shop-title">
            <a href="#" onclick="history.back()" class="back-icon">&#10094;</a>
            <div class="shop-name">{{ $restaurant_detail->shop }}</div>
        </div>
        <div class="shop-image">
            <img src="{{ $restaurant_detail->image }}" alt="{{$restaurant_detail->shop }}" width="50%" height="25%" class="shop-picture">
        </div>
        <div class="shop-hashtag">#{{$restaurant_detail->area}} #{{ $restaurant_detail->genre }}</div>
        <div class="shop-overview" >{{ $restaurant_detail->overview }}</div>
    </div>
</div>
@endsection