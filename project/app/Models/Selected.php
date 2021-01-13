<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selected extends Model
{
    use HasFactory;

    public function accepted(){
        return $this->belongsTo(Accepted::class);
    }

    protected $table = 'selected';
}
