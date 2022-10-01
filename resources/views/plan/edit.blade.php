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
                        <span class="card-title">Update Plan</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('plans.update', $plan->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('plan.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
