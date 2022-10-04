<?php

namespace App\Http\Controllers;

use App\Models\SolicitudServicio;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\TipoServicio;
use Carbon\carbon;

/**
 * Class SolicitudServicioController
 * @package App\Http\Controllers
 */
class SolicitudServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudServicios = SolicitudServicio::paginate();

        return view('solicitud-servicio.index', compact('solicitudServicios'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitudServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $TiempoActual = Carbon::now();
        $hora = $TiempoActual->toTimeString();
        $fecha = $TiempoActual->format('Y-m-d');
       // $fecha = $TiempoActual->toDateString();



        $solicitudServicio = new SolicitudServicio();
        $clien = Cliente::pluck('nombre','id');
        $tserv = TipoServicio::pluck('nombre','id');

        return view('solicitud-servicio.create', compact('solicitudServicio', 'clien', 'tserv', 'hora','fecha' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SolicitudServicio::$rules);

        $solicitudServicio = SolicitudServicio::create($request->all());

        return redirect()->route('solicitud-servicios.index')
            ->with('success', 'SolicitudServicio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitudServicio = SolicitudServicio::find($id);

        return view('solicitud-servicio.show', compact('solicitudServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $TiempoActual = Carbon::now();
        $hora = $TiempoActual->toTimeString();
        $fecha = $TiempoActual->format('Y-m-d');

        $solicitudServicio = SolicitudServicio::find($id);
        $clien = Cliente::pluck('nombre','id');
        $tserv = TipoServicio::pluck('nombre','id');

        return view('solicitud-servicio.edit', compact('solicitudServicio','clien', 'tserv','hora','fecha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SolicitudServicio $solicitudServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitudServicio $solicitudServicio)
    {
        request()->validate(SolicitudServicio::$rules);

        $solicitudServicio->update($request->all());

        return redirect()->route('solicitud-servicios.index')
            ->with('success', 'SolicitudServicio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitudServicio = SolicitudServicio::find($id)->delete();

        return redirect()->route('solicitud-servicios.index')
            ->with('success', 'SolicitudServicio deleted successfully');
    }
}
