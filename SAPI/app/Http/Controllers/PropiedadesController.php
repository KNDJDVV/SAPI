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

        // Crear una nueva instancia de Propiedad y guardarla en la base de datos
        Propiedades::create($request->all());

        // Redireccionar a la vista index
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
        
        // Pasar la propiedad a la vista de edición
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

        // Obtener la propiedad específica que se va a actualizar utilizando el modelo
        $propiedad = Propiedades::findOrFail($id);
        
        // Actualizar los datos de la propiedad con los datos del formulario
        $propiedad->update($request->all());

        // Redireccionar a la vista index
        return redirect()->route('propiedades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       // Obtener la propiedad específica que se va a eliminar utilizando el modelo y eliminarla
       Propiedades::findOrFail($id)->delete();
        
       // Redireccionar a la vista index
       return redirect()->route('propiedades.index');

    }
}
