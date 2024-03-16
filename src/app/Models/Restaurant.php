<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
