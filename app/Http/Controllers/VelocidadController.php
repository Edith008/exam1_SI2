<?php

namespace App\Http\Controllers;

use App\Models\Velocidad;
use Illuminate\Http\Request;

/**
 * Class VelocidadController
 * @package App\Http\Controllers
 */
class VelocidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $velocidads = Velocidad::paginate();

        return view('velocidad.index', compact('velocidads'))
            ->with('i', (request()->input('page', 1) - 1) * $velocidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $velocidad = new Velocidad();
        return view('velocidad.create', compact('velocidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Velocidad::$rules);

        $velocidad = Velocidad::create($request->all());

        return redirect()->route('velocidads.index')
            ->with('success', 'Velocidad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $velocidad = Velocidad::find($id);

        return view('velocidad.show', compact('velocidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $velocidad = Velocidad::find($id);

        return view('velocidad.edit', compact('velocidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Velocidad $velocidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Velocidad $velocidad)
    {
        request()->validate(Velocidad::$rules);

        $velocidad->update($request->all());

        return redirect()->route('velocidads.index')
            ->with('success', 'Velocidad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $velocidad = Velocidad::find($id)->delete();

        return redirect()->route('velocidads.index')
            ->with('success', 'Velocidad deleted successfully');
    }
}
