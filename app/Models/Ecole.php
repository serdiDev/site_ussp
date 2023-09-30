<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;

    public function programmes(){
        return $this->hasMany(Programme::class);
    }

    public function preinscription(){
        return $this->hasMany(Preinscription::class);
    }



}
