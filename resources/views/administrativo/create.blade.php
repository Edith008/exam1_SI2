@extends('adminlte::page')

@section('title', 'Servicios de Internet')

@section('content_header')
    <h1></h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h3>REGISTRAR ADMINISTRATIVO</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('administrativos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('administrativo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
