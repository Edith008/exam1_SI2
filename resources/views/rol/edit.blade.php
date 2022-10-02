@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<section class="content container-fluid"> 
    <div class="">
    <div class="col-md-12">
       
            @includeif('partials.errors')
    
    <div class="card card-default">        
            <span id="card_title">
                <h7>Editar Rol</h7>
            </span>
            <div class="card-body">
                <form method="POST" action="{{ route('roles.update', $rol->id) }}"  role="form" enctype="multipart/form-data">
                    @csrf    
                        {{ method_field('PATCH') }}
                        
                        @include('rol.form')

                </form>     
           </div>
    </div>

    </div>
    </div>
</section>  

@stop