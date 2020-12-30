<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function doer(){
        return $this->belongsTo(User::class);
    }

    public function rating(){
        return $this->hasOne(Finished::class);
    }

    public function selected(){
        return $this->hasOne(Selected::class);
    }
}
