<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function espacio(){
        return $this->morphTo('espacio', 'espacio_tipo','espacio_id');
    }

}
