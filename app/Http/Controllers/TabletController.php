<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablet;
class TabletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tablets=Tablet::all();
        return view('administrador/materiales/tablets',compact('tablets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
	{
    	$tablet = new Tablet;

        $tablet->codigo = $request->codigo;
    	$tablet->estado = $request->estado;
    	$tablet->fecha_adquisicion = $request->fecha_adquisicion;
        $tablet->modelo_id=$request->modelo_id;
        $tablet->sede_id=$request->sede_id;
    	$tablet->save(); 
    	return redirect()->route('admin.gestion.tablets');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $tablet = Tablet::find($id);
        return view('administrador/materiales/tablets/editar',compact('tablet'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
