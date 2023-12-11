<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pagina de inicio
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //formulario 
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        //sirve para guardar base de datos
        $producto = new producto();
        $producto->name = $request->input ('name');
        $producto->tipo = $request->input ('tipo');
        $producto->descripcion = $request->input ('descripcion');
        $producto->save();
        return redirect()->route('crud.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(){
        //sirve obtener registro de nuestra tabla
        $producto = producto::paginate();
        return view('mostrar', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function unico($id){
        $producto = producto::find($id);
        return view('unico', compact('producto'));  

     }    
    public function edit(producto $producto){
        return view('editar', compact('producto'));
    
        //sirve para traer datos que se eliminara
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, producto $producto)
    {
        $producto->name = $request->name;
        $producto->tipo = $request->tipo;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect()->route('crud.unico',$producto);
        //actualiza datos 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto){
        //elimina un registro
        $producto->delete();
        return redirect()->route('crud.show');
    }
}
