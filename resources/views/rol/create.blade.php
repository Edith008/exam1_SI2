@extends('adminlte::page')

@section('template_title')
    Create Rol
@endsection

@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

             @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registar Rol</span>
                    </div>    

                    <div class="card-body">    
                        <form method="POST" action="{{ route('roles.store') }}"  role="form"  enctype="multipart/form-data">
                         @csrf
                         @include('rol.form')

                        </form>  
                    </div>  
                </div>           
            </div>
        </div>
    </section>
@stop
