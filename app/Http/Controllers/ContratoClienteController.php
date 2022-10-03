<?php

namespace App\Http\Controllers;

use App\Models\ContratoCliente;
use Illuminate\Http\Request;

use App\Models\Administrativo;
use App\Models\Cliente;
use App\Models\Ciudad;
use App\Models\Plan;
use App\Models\Router;

/**
 * Class ContratoClienteController
 * @package App\Http\Controllers
 */
class ContratoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratoClientes = ContratoCliente::paginate();

        return view('contrato-cliente.index', compact('contratoClientes'))
            ->with('i', (request()->input('page', 1) - 1) * $contratoClientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contratoCliente = new ContratoCliente();

        $administra = Administrativo::pluck('nombre','id');
        $clien = Cliente::pluck('nombre','id');
        $ciu = Ciudad::pluck('nombre','id');
        $pla = Plan::pluck('nombre','id');
        $rou = Router::pluck('marca','id');


        return view('contrato-cliente.create', 
                compact('contratoCliente', 'administra', 'clien', 'ciu','pla','rou'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ContratoCliente::$rules);

        $contratoCliente = ContratoCliente::create($request->all());

        return redirect()->route('contrato-clientes.index')
            ->with('success', 'ContratoCliente creado con Exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contratoCliente = ContratoCliente::find($id);

        return view('contrato-cliente.show', compact('contratoCliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contratoCliente = ContratoCliente::find($id);

        $administra = Administrativo::pluck('nombre','id');
        $clien = Cliente::pluck('nombre','id');
        $ciu = Ciudad::pluck('nombre','id');
        $pla = Plan::pluck('nombre','id');
        $rou = Router::pluck('marca','id');

        return view('contrato-cliente.edit', 
                compact('contratoCliente', 'administra', 'clien', 'ciu','pla','rou'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ContratoCliente $contratoCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContratoCliente $contratoCliente)
    {
        request()->validate(ContratoCliente::$rules);

        $contratoCliente->update($request->all());

        return redirect()->route('contrato-clientes.index')
            ->with('success', 'ContratoCliente actualizado con Exito!!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contratoCliente = ContratoCliente::find($id)->delete();

        return redirect()->route('contrato-clientes.index')
            ->with('success', 'ContratoCliente eliminado con Exito!!');
    }
}
