<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('administrativo') }}
            {{ Form::select('administrativo_id',$administra, $contratoCliente->administrativo_id, ['class' => 'form-control' . ($errors->has('administrativo_id') ? ' is-invalid' : ''), 'placeholder' => 'Administrativo ']) }}
            {!! $errors->first('administrativo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('cliente') }}
                {{ Form::select('cliente_id',$clien, $contratoCliente->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente ']) }}
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
                {{ Form::select('plan_id',$pla, $contratoCliente->plan_id, ['class' => 'form-control' . ($errors->has('plan_id') ? ' is-invalid' : ''), 'placeholder' => 'Plan ']) }}
                {!! $errors->first('plan_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('router') }}
                {{ Form::select('router_id',$rou, $contratoCliente->router_id, ['class' => 'form-control' . ($errors->has('router_id') ? ' is-invalid' : ''), 'placeholder' => 'Router ']) }}
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
                {{ Form::label('ciudad') }}
                {{ Form::select('ciudad_id',$ciu, $contratoCliente->ciudad_id, ['class' => 'form-control' . ($errors->has('ciudad_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad ']) }}
                {!! $errors->first('ciudad_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
        </div>

        <!-- longitud y latitud -->
        <div class="row">
            <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('latitud') }}
                {{ Form::text('latitud', $contratoCliente->latitud, ['class' => 'form-control' . ($errors->has('latitud') ? ' is-invalid' : ''), 'placeholder' => 'latitud']) }}
                {!! $errors->first('latitud', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>

            <div class="col-md-3 ">
            <div class="form-group">
                {{ Form::label('longitud') }}
                {{ Form::text('longitud', $contratoCliente->longitud, ['class' => 'form-control' . ($errors->has('longitud') ? ' is-invalid' : ''), 'placeholder' => 'longitud']) }}
                {!! $errors->first('longitud', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
        </div>

        
        <!-- longitud y latitud 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for='latitud'>Latitud </label>   
                    <input type="text" id="latitud" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for='longitud'>Longitud </label>   
                    <input type="text" id="longitud" class="form-control">
                </div>
            </div>
        </div>
        -->

        <!-- Mapa -->
        <div class="card">
            <div class="row">
                    <div class="col-md-12">
                        <div id="mapa" style="width 100%; height: 400px"></div>
                    </div>
            </div>

            <script>
            
                function iniciarMapa(){
                    var latitud = -17.789218;
                    var longitud = -63.186886;

                    coordenadas ={
                        lng: longitud,
                        lat: latitud
                    }
                    generarMapa(coordenadas);
                } 
                
                function generarMapa(coordenadas){
                    var mapa = new google.maps.Map(document.getElementById('mapa'),
                    {
                        zoom : 12,
                        center:new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
                    });    

                    marcador = new google.maps.Marker({
                        map: mapa,
                        draggable: true,
                        position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
                    });

                    marcador.addListener('dragend',function(event){
                        document.getElementById("latitud").value = this.getPosition().lat();
                        document.getElementById("longitud").value = this.getPosition().lng();

                    })
                    
                    

                }
                
            </script> 
        </div>   
        
        <script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMapa"></script>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary " id="Guardar">Guardar</button>
    </div>
</div>