<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public $timestamps = false;



    public function libros(){
        return $this->hasMany(Libro::class);
    }


    public function ebooks(){
        return $this->hasMany(Libro::class);
    }
}
