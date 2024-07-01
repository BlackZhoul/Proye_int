<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penalizacion extends Model
{
    use HasFactory;
    protected $table='penalizaciones';
    public $timestamps = false;


    public function user(){
        return $this->belongsTo(User::class);
    }

}
