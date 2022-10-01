<?php

namespace App\Http\Controllers;

use App\Models\Router;
use Illuminate\Http\Request;

/**
 * Class RouterController
 * @package App\Http\Controllers
 */
class RouterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routers = Router::paginate();

        return view('router.index', compact('routers'))
            ->with('i', (request()->input('page', 1) - 1) * $routers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $router = new Router();
        return view('router.create', compact('router'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Router::$rules);

        $router = Router::create($request->all());

        return redirect()->route('routers.index')
            ->with('success', 'Router created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $router = Router::find($id);

        return view('router.show', compact('router'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $router = Router::find($id);

        return view('router.edit', compact('router'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Router $router
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Router $router)
    {
        request()->validate(Router::$rules);

        $router->update($request->all());

        return redirect()->route('routers.index')
            ->with('success', 'Router updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $router = Router::find($id)->delete();

        return redirect()->route('routers.index')
            ->with('success', 'Router deleted successfully');
    }
}
