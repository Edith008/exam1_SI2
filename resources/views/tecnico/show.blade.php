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
                        <h3> DETALLE DEL TECNICO </h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tecnicos.index') }}"> volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tecnico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $tecnico->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $tecnico->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Fnacimiento:</strong>
                            {{ $tecnico->fnacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $tecnico->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $tecnico->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
