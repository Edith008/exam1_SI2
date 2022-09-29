@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1>Mostrar detalle de Rol</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">                        
            
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $rol->nombre }}
            </div>
            
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $rol->descripcion }}
            </div>

            <div >
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Volver</a>
            </div>

    </div> 
</div>

@stop