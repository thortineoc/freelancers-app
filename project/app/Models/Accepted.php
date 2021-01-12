<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accepted extends Model
{
    use HasFactory;

    public function offer(){
        return $this->belongsTo(Offer::class);
    }

    public function selected(){
        return $this->hasOne(Selected::class);
    }

    protected $table = 'accepted';
}
