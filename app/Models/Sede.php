<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function salas(){
        return $this->hasMany(Sala::class);
    }

    public function computadoras(){
        return $this->hasMany(Computadora::class);
    }
    public function tablets(){
        return $this->hasMany(Tablet::class);
    }
    public function calculadoras(){
        return $this->hasMany(Calculadora::class);
    }

    public function ejemplares(){
        return $this->hasMany(Ejemplar::class);
    }
}
