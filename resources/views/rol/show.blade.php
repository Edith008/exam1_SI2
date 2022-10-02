@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1> </h1>
@stop

@section('content')

<section class="content container-fluid">
    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h7>Detalle de Rol</h7>
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> volver</a>
                        </div>
                    </div>

                    <div class="card-body">
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
            </div>    
    </div> 
</div>

@stop