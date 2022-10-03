<?php

namespace App\Http\Controllers;

use App\Models\TipoServicio;
use Illuminate\Http\Request;

/**
 * Class TipoServicioController
 * @package App\Http\Controllers
 */
class TipoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoServicios = TipoServicio::paginate();

        return view('tipo-servicio.index', compact('tipoServicios'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoServicio = new TipoServicio();
        return view('tipo-servicio.create', compact('tipoServicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoServicio::$rules);

        $tipoServicio = TipoServicio::create($request->all());

        return redirect()->route('tipo-servicios.index')
            ->with('success', 'TipoServicio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoServicio = TipoServicio::find($id);

        return view('tipo-servicio.show', compact('tipoServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoServicio = TipoServicio::find($id);

        return view('tipo-servicio.edit', compact('tipoServicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoServicio $tipoServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoServicio $tipoServicio)
    {
        request()->validate(TipoServicio::$rules);

        $tipoServicio->update($request->all());

        return redirect()->route('tipo-servicios.index')
            ->with('success', 'TipoServicio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoServicio = TipoServicio::find($id)->delete();

        return redirect()->route('tipo-servicios.index')
            ->with('success', 'TipoServicio deleted successfully');
    }
}
