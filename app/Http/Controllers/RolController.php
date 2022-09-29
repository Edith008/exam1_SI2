<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;


class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::paginate();

        return view('rol.index', compact('rols'))
            ->with('i', (request()->input('page', 1) - 1) * $rols->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = new Rol();
        return view('rol.create', compact('rol'));
        // return view ('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rol::$ruls);
        $rol = Rol::create($request->all());
 
         return redirect()->route('roles.index',$rol)
            ->with('success', 'Rol creado con exito.');
 
         //return $request->all(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::find($id);
        return view ('rol.show',compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view ('rol.edit',compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,Rol $rol)  //Rol $rol
    {
        /* request()->validate(Rol::$ruls);
        $rol->update($request->all());

        return redirect()->route('roles.index')
            ->with('success', 'Rol actualizado con exito!');
        */
       
        
        $roles=request()->except(['_token','_method']);
        Rol::where('id','=',$id)->update($roles);

        $rol=Rol::findOrFail($id);
        return redirect()->route('roles.index')
            ->with('success', 'Rol actualizado con exito!');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $rol = Rol::find($id)->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Rol eliminado con exito!');
    }
}
