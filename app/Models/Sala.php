<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function sede(){
        return $this->belongsTo(Sede::class);
    }


    public function reservas(){
        return $this->morphMany(Reserva::class,'espacio','espacio_tipo','espacio_id');
    }
}
