<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
class FavoriteController extends Controller
{
    public function like($id, Request $request ){
        $favorite = New Favorite();
        $favorite->user_id=Auth::user()->id;
        $favorite->restaurant_id=$id;
        $favorite->save();
        return back();
    }

    public function unlike($id, Request $request){
        $user= Auth::user()->id;
        $favorite=Favorite::where('user_id',$user)->where('restaurant_id', $id)->first();
        $favorite->delete();
        return back();
    }

}
