<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function principal(){
        return $this->belongsTo(User::Class);
    }

    public function offers(){
       return $this->hasMany(Offer::class);
    }

}
