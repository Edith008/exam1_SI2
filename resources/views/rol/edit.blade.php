@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1>Editar rol</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            @includeif('partials.errors')
            <form method="POST" action="{{ route('roles.update', $rol->id) }}"  role="form" enctype="multipart/form-data">
                @csrf    
                    {{ method_field('PATCH') }}
                    
                    @include('rol.form')

            </form>     
        </div>
    </div>

@stop