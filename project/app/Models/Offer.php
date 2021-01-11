<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function doer(){
        return $this->belongsTo(User::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function completed(){
        return $this->hasOne(Completed::class);
    }

    public function accepted(){
        return $this->hasMany(Accepted::class);
    }

}
