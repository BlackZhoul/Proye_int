<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioAppController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }
    public function admin(){
        return view('administrador.index');
    }
}
