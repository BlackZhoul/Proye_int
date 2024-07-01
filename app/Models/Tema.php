<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function libros(){
        return $this->belongsToMany(Libro::class,'libro_tema','tema_id','libro_id');
    }
    public function ebooks(){
        return $this->belongsToMany(Ebook::class,'ebook_tema','tema_id','ebook_id');
    }


}
