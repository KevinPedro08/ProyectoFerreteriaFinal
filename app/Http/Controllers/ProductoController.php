<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos =  Producto::all();

        //dd($productos);
        
        return view('producto/productoIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("producto/productoCreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'min:1', 'max:50'],
            'cantidad' => ['required', 'numeric'],
            'precio' => ['required', 'numeric'],
            'marca' => ['required', 'min:1', 'max:50'],
            'descripcion' => ['required', 'min:5'],
        ]);
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->marca = $request->marca;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('producto/productoShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {

        return view("producto.productoEdit", compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => ['required', 'min:1', 'max:50'],
            'cantidad' => ['required', 'numeric'],
            'precio' => ['required', 'numeric'],
            'marca' => ['required', 'min:1', 'max:50'],
            'descripcion' => ['required', 'min:5'],
        ]);
        $producto->nombre = $request->nombre;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->marca = $request->marca;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
