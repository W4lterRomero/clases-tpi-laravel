<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $proveedors = Proveedor::all();
        return view('proveedors.index',compact('proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proveedors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre_proveedor' => 'required|string',
            'direccion' => 'required|string',

        ]);

        Proveedor::create($request->all());
        return redirect()->route('proveedors.index')->with('success', 'proveedor creado exitosanmente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        //
        return view('proveedors.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        //

        return view('proveedors.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedors)
    {
        //
         $request->validate([
            'nombre' => 'required|string',
            'direccion' => 'required' . $proveedors->id,
            'codigo' => 'required' . $proveedors->id,
        ]);
        $proveedors->update($request->all());

        return redirect()->route('proveedors.index')->with('success', 'proveedor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedors)
    {
        //
        $proveedors->delete();

        return redirect()->route('proveedors.index')->with('success', 'proveedor eliminado correctamente');
    }
}


