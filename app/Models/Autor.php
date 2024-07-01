<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table='autores';




    public function libros(){
        return $this->hasMany(Libro::class,'autor_id','id');
    }
    public function ebooks(){
        return $this->hasMany(Ebook::class,'autor_id','id');
    }


}
