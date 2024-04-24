<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = DB::table('clientes')->get(); // Obtener todos los clientes
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = DB::table('clientes')
        ->orderBy('nombre')
        ->get();
        return view('clientes.new', ['clientes' => $clientes]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|string',
            'email' => 'required|email',
            'tipo' => 'required|in:comprador,vendedor,arrendatario']);

        // Crear un nuevo objeto Cliente con los datos recibidos
        $cliente = new Clientes();
        $cliente->nombre = $request->name;
        $cliente->id = $request->code;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->tipo = $request->codi;

        // Guardar el cliente en la base de datos
        $cliente->save();

        // Redirigir a la ruta 'Clientes.index'
        return redirect()->route('Clientes.index');
    
    }
        //DB::table('clientes')->insert($request->all());

        
        //return redirect()->route('clientes.index');
    

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
        $cliente = DB::table('clientes')->find($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('clientes')->where('id', $id)->update($request->all());

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();
        return redirect()->route('clientes.index');
    }
}
