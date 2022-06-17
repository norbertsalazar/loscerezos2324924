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
        $insumos = new Supply();
        return view('insumos.crear' , compact('insumos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insumos = new Supply();
        $insumos->nombre = $request->nombre;
        $insumos->fecha = $request->fecha;
        $insumos->tipo = $request->tipo;
        $insumos->operacion = $request->operacion;
        $insumos->cantidad = $request->cantidad;
        $insumos->almacen = $request->almacen;
        $insumos->trabajador = $request->trabajador;
        $insumos->numeroLote = $request->numeroLote;
        $insumos->numeroFactura = $request->numeroFactura;
        $insumos->save();
        session()->flash("flas.banner" , "Insumos creados de manera satisfactoria");
        return Redirect::route('insumos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $insumos)
    {
        return view('insumos.ver' , compact('insumos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $insumos)
    {
        return view('insumos.edit', compact('insumos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supply $insumos)
    {
        $insumos->nombre = $request->nombre;
        $insumos->fecha = $request->fecha;
        $insumos->tipo = $request->tipo;
        $insumos->operacion = $request->operacion;
        $insumos->cantidad = $request->cantidad;
        $insumos->almacen = $request->almacen;
        $insumos->trabajador = $request->trabajador;
        $insumos->numeroLote = $request->numeroLote;
        $insumos->numeroFactura = $request->numeroFactura;
        $insumos->save();
        session()->flash("flash.banner", "Insumo modificado de manera satisfactoria");
        return Redirect::route('insumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $insumos)
    {
        $insumos->delete();
        session()->flash("flash.banner", "Insumo eliminado de manera satisfactoria");
        return Redirect::route('insumos.index');
    }
}
