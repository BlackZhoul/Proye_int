<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function temas(){
        return $this->belongsToMany(Tema::class,'ebook_tema','ebook_id','tema_id');
    }

    public function editorial(){
        return $this->belongsTo(Editorial::class,'editorial_id','id');
    }
    public function autor(){
        return $this->belongsTo(Autor::class,'autor_id','id');
    }
}
