<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        if(Auth::id()){
            //$productos =  Producto::all();
            $productos =  Producto::with('user')->get();
        }
        else{
            $productos =  Producto::all();
        }
        //$productos =  Producto::withTrashed()->get(); //Mostrar eliminados
        //dd($productos);
        
        return view('producto/productoIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $provees = Proveedor::all();

        return view('producto/productoCreate', compact('provees'));
        //return view("producto/productoCreate");
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
            'proveedor_id' => ['required'],
            'archivo' => ['required', 'max:100000', 'mimes:jpg,png'],
        ]);

        $request->merge([
            'user_id' => Auth::id(),
            'imagen' => $request->file('archivo')->store('public/imagenes'),
        ]);

        $producto = Producto::create($request->all());
        $producto->proveedores()->attach($request->proveedor_id);

        //$request->file('archivo')->store('public/imagenes');

        //$producto = new Producto();
        //$producto->nombre = $request->nombre;
        //$producto->cantidad = $request->cantidad;
        //$producto->precio = $request->precio;
        //$producto->marca = $request->marca;
        //$producto->descripcion = $request->descripcion;
        //$producto->save();

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
        $provees = Proveedor::all();
        return view('producto.productoEdit', compact('provees', 'producto'));
        //return view("producto.productoEdit", compact('producto'));
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
            'proveedor_id' => ['required'],
        ]);

        Producto::where('id', $producto->id)
            ->update($request->except('_token', '_method', 'proveedor_id'));
        
        $producto->proveedores()->sync($request->proveedor_id);

        //$producto->nombre = $request->nombre;
        //$producto->cantidad = $request->cantidad;
        //$producto->precio = $request->precio;
        //$producto->marca = $request->marca;
        //$producto->descripcion = $request->descripcion;
        //$producto->save();
        
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

    public function favoritos()
    { 
        return view('producto/productoIndex');
    }
}
