@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1></h1>
@stop


@section('content')

<div class="card">
    <div class="card-header">
        <div class="float-left">
            <h3>DETALLE DEL CLIENTE</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Volver</a>
        </div>
    </div>

    <div class="card-body">                                  
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $cliente->nombre }}
            </div>
            
            <div class="form-group">
                <strong>Ci:</strong>
                {{ $cliente->ci }}
            </div>

            <div class="form-group">
                <strong>Sexo:</strong>
                {{ $cliente->sexo }}
            </div>

            <div class="form-group">
                <strong>Fnacimiento:</strong>
                {{ $cliente->fnacimiento }}
            </div>

            <div class="form-group">
                <strong>Direccion:</strong>
                {{ $cliente->direccion }}
            </div>

            <div class="form-group">
                <strong>Email:</strong>
                {{ $cliente->email }}
            </div>

            <div class="form-group">
                <strong>Telefono:</strong>
                {{ $cliente->telefono }}
            </div>


    </div> 
</div>

@stop