<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Transacciones;

class TransaccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaccion = DB::table('transacciones')
    ->join('clientes', 'transacciones.id', '=', 'clientes.id')
    ->join('propiedades', 'transacciones.id', '=', 'propiedades.id')
    ->select('transacciones.*', 'clientes.nombre', 'propiedades.direccion')
    ->get();
        
        return view('Transacciones.index',['transacciones' => $transaccion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaccion = DB::table('transacciones')
        ->orderBy('id')
        ->get();
        return view('Transacciones.new', ['Transacciones' => $transaccion]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaccion = new Transacciones();
       
        $transaccion->propiedad_id = $request->propiedad;
        $transaccion->cliente_id = $request->cliente;
        $transaccion->tipo_transaccion = $request->tipo;
        $transaccion->fecha_transaccion = $request->fecha;
        $transaccion->monto_transaccion = $request->monto;
        $transaccion->save();

        $transaccion = DB::table('transacciones')
        ->join('clientes', 'transacciones.id', '=', 'clientes.id')
        ->join('propiedades', 'transacciones.id', '=', 'propiedades.id')
        ->select('transacciones.*', 'clientes.nombre', 'propiedades.direccion')
        ->get();
            
            return view('Transacciones.index',['transacciones' => $transaccion]);
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
        $transaccion = DB::table('transacciones')->find($id);
        return view('transacciones.edit', compact('transaccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id' => 'required',
            'propiedad_id' => 'required',
            'cliente_id' => 'required',
            'tipo_transaccion' => 'required',
            'fecha_transaccion' => 'required',
            'monto_transaccion' => 'required',
        ]);
        $transaccion = Transacciones::findOrFail($id);


        $transaccion->update($request->all());


        

        return redirect()->route('Transacciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('transacciones')->where('id', $id)->delete();
        return redirect()->route('Transacciones.index');
    }
}
