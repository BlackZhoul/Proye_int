<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    //
    public function index(){
        return view("");
    }
    public function admin_index(){
        return view("administrador.prestamos.index");

    }

}
