<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    //
    public function admin_index(){
        return view("administrador.reservas.index");

    }
}
