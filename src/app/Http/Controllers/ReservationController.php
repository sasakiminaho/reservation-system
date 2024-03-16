<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Favorite;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function store(ReservationRequest $request)
    {
        $input = $request->validated();
        dd($input);
        $reservation = Reservation::create([
            'user_id' => Auth::user()->id,
            'restaurant_id' => $request->id,
            'reserve_date' => $request->date,
            'reserve_time' => $request->time,
            'member' => $request->number,
        ]);

        return view('done');

    }
    public function done(){
        return view('done');
    }

    public function mypage() {

        $reservations = Reservation::where('user_id', \Auth::user()->id)->with('restaurant:id,shop')->get();
        $favorites = Favorite::where('user_id', \Auth::user()->id)->with('restaurant:id,shop,area,genre,image,overview')->get();
        return view('mypage', compact('reservations', 'favorites'));
    }

    public function delete($id, Request $request) {
        $user = Auth::user()->id;
        $reservation =Reservation::where('user_id',$user)->where('restaurant_id', $id)->first();
        $reservation->delete();
        return back();
    }

    public function change($id) {
        $shop = Restaurant::where('id',$id)->first();
        $user = Auth::user()->id;
        $reservation = Reservation::where('user_id', $user)->where('restaurant_id',$id)->first();
        return view('change',compact('shop', 'reservation'));
    }

    public function update(Request $request){
        $reservation = Reservation::where('id',$request->reservation_id)->latest()->first();
        $reservation->update([
            'user_id' => Auth::user()->id,
            'restaurant_id' => $request->id,
            'reserve_date' => $request->date,
            'reserve_time' => $request->time,
            'member' => $request->number,
        ]);
        return view('/changed');
    }

    public function review_page($id) {
        $shop = Restaurant::where('id',$id)->first();
        $user = Auth::user()->id;
        $reservation = Reservation::where('user_id', $user)->where('restaurant_id',$id)->first();
        $now = '2024-03-01';
        if($now > $reservation->reserve_date){
            return view('review', compact('reservation'));
        }else{
            return view('return');
        }
    }

    public function review(Request $request) {
        $review = Review::create([
            'user_id' => Auth::user()->id,
            'restaurant_id' => $request->id,
            'stars' => $request->star,
            'comment' => $request->comment,
        ]);
        return view('thanks2');
    }

}
