<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

use App\Models\Velocidad;

/**
 * Class PlanController
 * @package App\Http\Controllers
 */
class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::paginate();

        return view('plan.index', compact('plans'))
            ->with('i', (request()->input('page', 1) - 1) * $plans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plan = new Plan();

        $veloci = Velocidad::pluck('descripcion','id');

        return view('plan.create', compact('plan','veloci'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Plan::$rules);

        $plan = Plan::create($request->all());

        return redirect()->route('plans.index')
            ->with('success', 'Plan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::find($id);

        return view('plan.show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = Plan::find($id);

        $veloci = Velocidad::pluck('descripcion','id');

        return view('plan.edit', compact('plan','veloci'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        request()->validate(Plan::$rules);

        $plan->update($request->all());

        return redirect()->route('plans.index')
            ->with('success', 'Plan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $plan = Plan::find($id)->delete();

        return redirect()->route('plans.index')
            ->with('success', 'Plan deleted successfully');
    }
}
