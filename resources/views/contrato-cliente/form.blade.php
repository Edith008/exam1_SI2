<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('administrativo_id') }}
            {{ Form::select('administrativo_id',$administra, $contratoCliente->administrativo_id, ['class' => 'form-control' . ($errors->has('administrativo_id') ? ' is-invalid' : ''), 'placeholder' => 'Administrativo Id']) }}
            {!! $errors->first('administrativo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('cliente_id') }}
                {{ Form::select('cliente_id',$clien, $contratoCliente->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
                {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('ci') }}
                {{ Form::text('ci', $contratoCliente->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
                {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('telefono') }}
                {{ Form::text('telefono', $contratoCliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
        </div>    

        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('plan_id') }}
                {{ Form::select('plan_id',$pla, $contratoCliente->plan_id, ['class' => 'form-control' . ($errors->has('plan_id') ? ' is-invalid' : ''), 'placeholder' => 'Plan Id']) }}
                {!! $errors->first('plan_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('router_id') }}
                {{ Form::select('router_id',$rou, $contratoCliente->router_id, ['class' => 'form-control' . ($errors->has('router_id') ? ' is-invalid' : ''), 'placeholder' => 'Router Id']) }}
                {!! $errors->first('router_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('direccion') }}
                {{ Form::text('direccion', $contratoCliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
            
            <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('ciudad_id') }}
                {{ Form::select('ciudad_id',$ciu, $contratoCliente->ciudad_id, ['class' => 'form-control' . ($errors->has('ciudad_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad Id']) }}
                {!! $errors->first('ciudad_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>