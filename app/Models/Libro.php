<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function ejemplares(){
        return $this->hasMany(Ejemplar::class);
    }
    public function editorial(){
        return $this->belongsTo(Editorial::class,'editorial_id','id');
    }
    public function autor(){
        return $this->belongsTo(Autor::class);
    }




    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function temas(){
        return $this->belongsToMany(Tema::class,'libro_tema','libro_id','tema_id');
    }


}
