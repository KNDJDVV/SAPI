<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedades = DB::table('propiedades')->get();
    
    return view('propiedades.index', ['propiedades' => $propiedades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propiedades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('propiedades')->insert([
            'direccion' => $request->input('direccion'),
            'tipo' => $request->input('tipo'),
            'tamaño' => $request->input('tamaño'),
            'numero_habitaciones' => $request->input('numero_habitaciones'),
            'precio' => $request->input('precio'),
            'estado' => $request->input('estado'),
        ]);
        return redirect()->route('propiedades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propiedad = DB::table('propiedades')->find($id);
return view('propiedades.edit', compact('propiedad'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('propiedades')
        ->where('id', $id)
        ->update([
            'direccion' => $request->input('direccion'),
            'tipo' => $request->input('tipo'),
            'tamaño' => $request->input('tamaño'),
            'numero_habitaciones' => $request->input('numero_habitaciones'),
            'precio' => $request->input('precio'),
            'estado' => $request->input('estado'),
        ]);
    
    return redirect()->route('propiedades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('propiedades')->where('id', $id)->delete();
        return redirect()->route('propiedades.index');
    }
}
