@extends('adminlte::page')

@section('title', 'Servicios de Internet')


@section('template_title')
    {{ $plan->name ?? 'Show Plan' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Plan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plans.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $plan->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Velocidad Id:</strong>
                            {{ $plan->velocidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $plan->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
