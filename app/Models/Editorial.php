<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table='editoriales';

    public function libros(){
        return $this->hasMany(Libro::class,'editorial_id','id');
    }

    public function ebooks(){
        return $this->hasMany(Ebook::class,'editorial_id','id');
    }

}
