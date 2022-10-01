@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1>Crear rol</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            @includeif('partials.errors')
                <div class="card-header">
                    <h3>NUEVO ROL</h3>
                </div>
            <form method="POST" action="{{ route('roles.store') }}"  role="form"  enctype="multipart/form-data">
                @csrf
                @include('rol.form')

            </form>      
        </div>
    </div>

@stop
