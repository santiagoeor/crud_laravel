<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $productos = Producto::where('producto', 'LIKE', '%%')->get();
        return view('products/listproduct',
        $productos,
         ['lista' => Producto::all()]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion = $request->validate([
            'codigo' => 'required|numeric|unique:productos', //productos es el nombre de la tabla
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        $producto = new Producto();
        $producto->codigo = $request->input('codigo');
        $producto->producto = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->save();

        // return("Registro guardado");
        return redirect('productos');
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
        //de esta manera enviamos la variable producto que esta en los apostrofos,
        // para mostrar en la vista los datos que vamos a editar
        return view('products/eliminar', ['id' => $id, 'producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        //de esta manera enviamos la variable producto que esta en los apostrofos,
        // para mostrar en la vista los datos que vamos a editar
        return view('products/editar', ['id' => $id, 'producto' => $producto]);
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
        $validacion = $request->validate([
            'codigo' => 'required|numeric', //productos es el nombre de la tabla
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);
        //aca ya se van a enviar los cambios editados a la base de datos
        $producto = Producto::find($id); //WHERE id=$id
        $producto->codigo = $request->input('codigo');
        $producto->producto = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->save();

        // return "Registro modificado";
        return redirect('productos');
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
        $producto->delete();
        // echo "Registro $id eliminado";
        return redirect('productos');
    }
}
