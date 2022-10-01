@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1> </h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">                        
            
          <div class="card-header">
                <div class="float-left">
                    <h3>DETALLE DEL ROL</h3>
                </div>

                <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> volver</a>
                </div>
            </div>

            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $rol->nombre }}
            </div>
            
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $rol->descripcion }}
            </div>

           
    </div> 
</div>

@stop