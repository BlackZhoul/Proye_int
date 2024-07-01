<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloCalculadora extends Model
{
    use HasFactory;
    protected $table='modelos_calculadoras';

    public $timestamps = false;


    public function calculadoras(){
        return $this->hasMany(Calculadora::class,'modelo_id','id');
    }
}
