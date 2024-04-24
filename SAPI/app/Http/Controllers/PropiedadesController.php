<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Propiedades;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedades = Propiedades::all();
        
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
        $request->validate([
            'direccion' => 'required',
            'tipo' => 'required',
            'tamaño' => 'required',
            'numero_habitaciones' => 'required',
            'precio' => 'required',
            'estado' => 'required',
        ]);

        
        Propiedades::create($request->all());

       
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
        $propiedad = Propiedades::findOrFail($id);
        
        
        return view('propiedades.edit', compact('propiedad'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'direccion' => 'required',
            'tipo' => 'required',
            'tamaño' => 'required',
            'numero_habitaciones' => 'required',
            'precio' => 'required',
            'estado' => 'required',
        ]);

       
        $propiedad = Propiedades::findOrFail($id);
        
       
        $propiedad->update($request->all());

        
        return redirect()->route('propiedades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
       Propiedades::findOrFail($id)->delete();
        
      
       return redirect()->route('propiedades.index');

    }
}
