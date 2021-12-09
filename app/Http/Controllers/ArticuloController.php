<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Articulo::get();
    }
    

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulo = new Articulo;
        $articulo->create($request->all());
    }

    /**
     * Mostrar el recurso especificado.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        return $articulo;
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        $articulo->update($request->all());
    }

    /**
     * Quite el recurso especificado del almacenamiento.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
    }
}
