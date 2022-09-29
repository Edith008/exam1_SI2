

<div class="card">
    <div class="card-body">
 
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $rol->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $rol->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    </div>
</div>
