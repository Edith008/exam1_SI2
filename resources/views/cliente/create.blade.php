@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1>Registar cliente</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            @includeif('partials.errors')
            <form method="POST" action="{{ route('clientes.store') }}"  role="form"  enctype="multipart/form-data">
                @csrf
                @include('cliente.form')

            </form>      
        </div>
    </div>

@stop