<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\Cliente;
use PDF;
use Carbon\carbon;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate();

        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    //
    public function pdf(Request $request)
    {
       // $TiempoActual = Carbon::now();
       // $hora = $TiempoActual->toTimeString();
       // $fecha = $TiempoActual->format('d-m-Y');
       

       
//        $pdf = PDF::loadView('chofere.pdf',['choferes'=>$choferes],compact('hora','fecha','choferes'));
//        return $pdf->download('_choferes.pdf');

       $clientes = Cliente::paginate();

       $pdf = PDF::loadView('cliente.pdf',['clientes'=>$clientes]);
        //$pdf->loadHTML('<h1> test </h1>');
         return $pdf->stream();
        
//        return $pdf->download('_choferes.pdf');

        //return view('chofere.pdf', compact('choferes'));   
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente();
        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cliente::$clientes);
        $cliente = Cliente::create($request->all());
 
         return redirect()->route('clientes.index',$cliente)
            ->with('success', 'cliente creado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view ('cliente.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view ('cliente.edit',compact('cliente'));
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
        $clientes=request()->except(['_token','_method']);
        Cliente::where('id','=',$id)->update($clientes);

        $clientes=Cliente::findOrFail($id);
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado con exito!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id)->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado con exito!');
    }
}
