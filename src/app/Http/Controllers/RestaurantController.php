<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index() {
        if(Auth::check()) {
            $restaurants = Restaurant::all();

            $favorites = Favorite::where('user_id',auth::user()->id,'restaurant_id')->get();

            return view('index', compact('restaurants', 'favorites'));
        }else {
            $restaurants = Restaurant::all();
            return view('index', compact('restaurants'));
        }
    }

    public function detail($id) {
        $restaurant_detail = Restaurant::find($id);
        return view('detail', compact('restaurant_detail'));
    }

    public function menu() {
        return view('menu');
    }

    public function search(Request $request) {

        if(isset($request->area)){
            $restaurants = Restaurant::where('area', $request->area)->get();
        }
        if(isset($request->genre)){
            $restaurants = Restaurant::where('genre', $request->genre)->get();
        }
        if(isset($request->search)){
            $restaurants = Restaurant::where('shop', 'LIKE', "%{$request->search}%")->orWhere('area', 'LIKE', "%{$request->search}%")->orWhere('genre', 'LIKE', "%{$request->search}%")->get();
        }

        if($request->area = null && $request->genre = null && $request->search = null){
            $restaurants = Restaurant::all();
        }
        $favorites = Favorite::where('user_id',auth::user()->id,'restaurant_id')->get();

        return view('index', compact('restaurants','favorites'));
    }
}
