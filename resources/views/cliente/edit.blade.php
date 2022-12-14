@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h3>EDITAR CLIENTE</h3>
        </div>
    
        <div class="card-body">
            @includeif('partials.errors')
            <form method="POST" action="{{ route('clientes.update', $cliente->id) }}"  role="form" enctype="multipart/form-data">
                @csrf    
                    {{ method_field('PATCH') }}
                    
                    @include('cliente.form')

            </form>     
        </div>
    </div>

@stop