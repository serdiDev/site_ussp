<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    public function options(){
        return $this->hasMany(Option::class);
    }

    public function ecoles(){
        return $this->belongsTo(Ecole::class);
    }
}
