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
                        <h3>EDITAR ADMINISTRATIVO</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('administrativos.update', $administrativo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('administrativo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
