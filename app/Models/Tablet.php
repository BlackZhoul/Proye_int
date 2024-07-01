<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function sede(){
        return $this->belongsTo(Sede::class);
    }


    public function modelo(){
        return $this->belongsTo(Tablet::class,'modelo_id','id');
    }


    
    public function prestamos(){
        return $this->morphMany(Reserva::class,'material','material_tipo','material_id');
    }
}
