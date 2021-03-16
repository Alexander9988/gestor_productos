<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();


        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $almacenes = Almacen::all();
        return view('productos/create', compact('categorias', 'almacenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->almacen_id = $request->almacen_id;
        $producto->categoria_id = $request->categoria_id;


        $producto->save();

        // Asignamos el producto a la tabla almacen_producto
        $asignacion = Producto::latest('id')->first(); //Función para obtener el último registro insertado en función del ID
        $asignacion->almacens()->attach($request->almacen_id);

        return redirect("/productos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('productos/show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $almacenes = Almacen::all();
        // $producto = Producto::findOrFail($id);

        $producto = Producto::find($id);
        return view('productos/edit', compact('producto', 'almacenes', 'categorias'));
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
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        //Quitamos la asignación antigua para actualizarla


        //--------------------------------- ¿Se puede editar una asignación? ---------------------------------------------//
        $producto->almacens()->wherePivot('producto_id', $id)->detach();
        // $producto->delete();
        // ---------------------------------------- --------------------------------------------- --------------------------//
        
        // Asignamos el producto a la tabla almacen_producto
        $asignacion = Producto::find($id);
        $asignacion->almacens()->attach($request->almacen_id);

        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $producto = Producto::find($id);

        // Eliminar asignación de tabla almacen_producto
        $producto->almacens()->wherePivot('producto_id', $id)->detach();
        $producto->delete();

        return redirect("/productos");
    }
}
