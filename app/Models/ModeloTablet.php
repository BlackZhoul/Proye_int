<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloTablet extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table='modelos_tablets';



    public function tablets(){
        return $this->hasMany(Tablet::class,'modelo_id','id');
    }
}
