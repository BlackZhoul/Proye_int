<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table='ejemplares';
    public function sede(){
        return $this->belongsTo(Sede::class);
    }

    public function libro(){
        return $this->belongsTo(Libro::class);
    }
    
    
    public function prestamos(){
        return $this->morphMany(Reserva::class,'material','material_tipo','material_id');
    }
}
