<?php

namespace App\Http\Controllers;

use App\Models\Administrativo;
use Illuminate\Http\Request;

/**
 * Class AdministrativoController
 * @package App\Http\Controllers
 */
class AdministrativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrativos = Administrativo::paginate();

        return view('administrativo.index', compact('administrativos'))
            ->with('i', (request()->input('page', 1) - 1) * $administrativos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administrativo = new Administrativo();
        return view('administrativo.create', compact('administrativo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Administrativo::$rules);

        $administrativo = Administrativo::create($request->all());

        return redirect()->route('administrativos.index')
            ->with('success', 'Administrativo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrativo = Administrativo::find($id);

        return view('administrativo.show', compact('administrativo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrativo = Administrativo::find($id);

        return view('administrativo.edit', compact('administrativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Administrativo $administrativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrativo $administrativo)
    {
        request()->validate(Administrativo::$rules);

        $administrativo->update($request->all());

        return redirect()->route('administrativos.index')
            ->with('success', 'Administrativo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $administrativo = Administrativo::find($id)->delete();

        return redirect()->route('administrativos.index')
            ->with('success', 'Administrativo deleted successfully');
    }
}
