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
                        <span class="card-title">Update Contrato Cliente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contrato-clientes.update', $contratoCliente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('contrato-cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
