<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class Computers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Index';
        $items = Computer::all();
        return view('index', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Crear Producto';
        return view('create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $descripcion = $request->filled('descripcion') ? $request->input('descripcion') : 'Sin descripcion';
        $producto = new Computer();
        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->modelo = $request->modelo;
        $producto->ram = $request->ram;
        $producto->procesador = $request->procesador;
        $producto->discoDuro = $request->discoDuro;
        $producto->descripcion = $descripcion;
        $producto->url = $request->url;
        $producto->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = 'Eliminar Producto';
        $items = Computer::find($id);
        return view("delete",compact('titulo','items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo='Editar Producto';
        $items = Computer::find($id);
        return view('edit',compact('titulo','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $descripcion = $request->filled('descripcion') ? $request->input('descripcion') : 'Sin descripcion';
        $producto = Computer::find($id);
        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->modelo = $request->modelo;
        $producto->ram = $request->ram;
        $producto->procesador = $request->procesador;
        $producto->discoDuro = $request->discoDuro;
        $producto->descripcion = $descripcion;
        $producto->url = $request->url;
        $producto->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Computer::find($id);
        $item->delete();
        return redirect('/');
    }
}
