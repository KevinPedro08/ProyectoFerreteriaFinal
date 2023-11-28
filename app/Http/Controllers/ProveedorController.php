<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    public function index()
    {
        $proveedores=Proveedor::all();
        /*Proveedor::where('nombre', 'Gustavo')->get();*/
        /*Proveedor::where('nombre', 'like', $request->consulta)->get();*/
        //dd($proveedores);
        
        return view('proveedor/proveedorIndex', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("proveedor/proveedorCreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'min:5', 'max:50'],
            'correo' => ['required'],
            'telefono' => ['digits_between:8,10'],
        ]);
        $proveedor = new Proveedor();
        $proveedor->nombre=$request->nombre;
        $proveedor->correo=$request->correo;
        $proveedor->telefono=$request->telefono;
        $proveedor->tipo=$request->tipo;
        $proveedor->save();

        return redirect()->route('proveedor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        return view('proveedor/proveedorShow', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedor/proveedorEdit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'nombre' => ['required', 'min:5', 'max:50'],
            'correo' => ['required'],
            'telefono' => ['digits_between:8,10'],
        ]);
        $proveedor->nombre = $request->nombre;
        $proveedor->correo = $request->correo;
        $proveedor->telefono = $request->telefono;
        $proveedor->tipo = $request->tipo;
        $proveedor->save();
        return redirect()->route('proveedor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedor.index');
    }
}
