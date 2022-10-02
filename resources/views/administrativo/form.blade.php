<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('nombre') }}
                {{ Form::text('nombre', $administrativo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('ci') }}
                {{ Form::text('ci', $administrativo->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
                {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('sexo') }}
                {{ Form::text('sexo', $administrativo->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
                {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('fnacimiento') }}
                {{ Form::text('fnacimiento', $administrativo->fnacimiento, ['class' => 'form-control' . ($errors->has('fnacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fnacimiento']) }}
                {!! $errors->first('fnacimiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('direccion') }}
                {{ Form::text('direccion', $administrativo->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
        </div>    

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $administrativo->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>