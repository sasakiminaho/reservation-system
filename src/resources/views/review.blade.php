@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

@section('content')
<div class="review">
    <div class="review-box">
        <div class="review-title">
            ５段階評価とコメントをお願いします。
        </div>
        <div class="review-input">
            <form action="/thanks2" method="post">
                @csrf
                <div class="review-input-star">
                    <p class="star">⭐️</p>
                    <select name="star" id="star" class="star-select">
                        <option value="1">✖️１</option>
                        <option value="2">✖️２</option>
                        <option value="3">✖️３</option>
                        <option value="4">✖️４</option>
                        <option value="5">✖️５</option>
                    </select>
                </div>
                <div class="review-input-comment">
                    <textarea class="comment" name="comment" id="comment" cols="40" rows="10" placeholder="お店へのコメントを書いてください。"></textarea>
                </div>
                <div class="submit_button">
                    <input type="hidden" name="id" value="{{ $reservation->restaurant_id}}">
                    <button class="submit">送信する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection