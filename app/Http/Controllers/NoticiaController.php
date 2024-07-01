<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    //
    public function admin_index(){
        return view("administrador.noticias.index");

    }

}
