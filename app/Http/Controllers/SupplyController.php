<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = Supply::all();
        return view('insumos.index',compact("insumos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumo = new Supply();
        return view('insumos.crear' , compact('insumo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insumo = new Supply();
        $insumo->nombre = $request->nombre;
        $insumo->fecha = $request->fecha;
        $insumo->tipo = $request->tipo;
        $insumo->operacion = $request->operacion;
        $insumo->cantidad = $request->cantidad;
        $insumo->almacen = $request->almacen;
        $insumo->trabajador = $request->trabajador;
        $insumo->numeroLote = $request->numeroLote;
        $insumo->numeroFactura = $request->numeroFactura;
        $insumo->save();
        session()->flash("flas.banner" , "Insumos creados de manera satisfactoria");
        return Redirect::route('insumos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $insumo)
    {
        return view('insumos.ver' , compact('insumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $insumo)
    {
        return view('insumos.edit', compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supply $insumo)
    {
        $insumo->nombre = $request->nombre;
        $insumo->fecha = $request->fecha;
        $insumo->tipo = $request->tipo;
        $insumo->operacion = $request->operacion;
        $insumo->cantidad = $request->cantidad;
        $insumo->almacen = $request->almacen;
        $insumo->trabajador = $request->trabajador;
        $insumo->numeroLote = $request->numeroLote;
        $insumo->numeroFactura = $request->numeroFactura;
        $insumo->save();
        session()->flash("flash.banner", "Insumo modificado de manera satisfactoria");
        return Redirect::route('insumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $insumo)
    {
        $insumo->delete();
        session()->flash("flash.banner", "Insumo eliminado de manera satisfactoria");
        return Redirect::route('insumos.index');
    }
}
