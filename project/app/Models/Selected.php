<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selected extends Model
{
    use HasFactory;

    public function offers(){
        return $this->belongsTo(Offer::class);
    }
}
