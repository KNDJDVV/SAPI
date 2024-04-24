<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        return view('transacciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('transacciones')->insert($request->all());

        
        return redirect()->route('transacciones.index');
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
        DB::table('transacciones')->where('id', $id)->update($request->all());

        return redirect()->route('transacciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('transacciones')->where('id', $id)->delete();
        return redirect()->route('transacciones.index');
    }
}
