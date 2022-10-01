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
                        <span class="card-title">Update Ciudad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ciudads.update', $ciudad->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ciudad.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
