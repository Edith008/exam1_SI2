<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::select('cliente_id',$clien, $solicitudServicio->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('tipoServicio_id') }}
            {{ Form::select('tipoServicio_id',$tserv, $solicitudServicio->tipoServicio_id, ['class' => 'form-control' . ($errors->has('tipoServicio_id') ? ' is-invalid' : ''), 'placeholder' => 'Tiposervicio Id']) }}
            {!! $errors->first('tipoServicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $solicitudServicio->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('fecha') }}
                {{ Form::text('fecha', $solicitudServicio->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'Value' => $fecha, 'readonly']) }}
                {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('hora') }}
                {{ Form::text('hora', $solicitudServicio->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'Value' => $hora, 'readonly']) }}
                {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
        </div>    

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>