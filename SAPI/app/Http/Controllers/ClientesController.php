<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes; 

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all(); 
        return view('clientes.index', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'tipo' => 'required',
        ]);

        Clientes::create($request->all());

        return redirect()->route('clientes.index');
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
        $cliente = Clientes::findOrFail($id);

    return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'tipo' => 'required',
    ]);

    $cliente = Clientes::findOrFail($id);

    $cliente->update($request->all());

    return redirect()->route('clientes.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $cliente = Clientes::findOrFail($id);

    $cliente->delete();

    return redirect()->route('clientes.index');
}

}
