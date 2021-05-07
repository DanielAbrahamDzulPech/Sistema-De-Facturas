<?php

namespace App\Http\Controllers;
use App\Models\Factura;
use App\Http\Requests\FacturasRequest;
use Illuminate\Http\Request;

class FacturasProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facturas= Factura::all();
        return View('lista_facturas', compact('facturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacturasRequest $request)
    {
        //
        $datos=new \App\Models\Factura;
        $datos->Proveedor=$request->Proveedor;
        $datos->Cliente=$request->Cliente;
        $datos->Monto=$request->Monto;
        $datos->Factura=$request->Factura->store('storage');
        $datos->save();
        $request->file('Factura')->store('public');
        return redirect()->route('Facturas.index')->with('mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $Factura)
    {
        //
        return View('detalle_factura',compact('Factura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
