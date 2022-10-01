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
                    <div class="card-header">
                        <h3>EDITAR TECNICO</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tecnicos.update', $tecnico->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tecnico.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
