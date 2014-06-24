@extends('sign-up')

@section('content')
<script type="text/javascript">

    function initialize() {
        var marcador=null;
        var mapa = new google.maps.Map(document.getElementById("map_canvas"),
            {
                center: new google.maps.LatLng(-6.489087879805055, -76.3608169555664),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

        //Creo un evento asociado a "mapa" cuando se hace "click" sobre el
        google.maps.event.addListener(mapa, "click", function(evento) {
            //Obtengo las coordenadas separadas

            if(marcador!=null){
                marcador.setMap(null);
            }

            latitud = evento.latLng.lat();
            longitud = evento.latLng.lng();

            //Creo un marcador utilizando las coordenadas obtenidas y almacenadas por separado en "latitud" y "longitud"
            var coordenadas = new google.maps.LatLng(latitud, longitud);

            $("#latitud").val(latitud);
            $("#longitud").val(longitud);
            /* Debo crear un punto geografico utilizando google.maps.LatLng */
            marcador = new google.maps.Marker({
                position: coordenadas,
                map: mapa,
                animation: google.maps.Animation.DROP,
                title: "Ubicación de Clinica"});


        }); //Fin del evento
    }


    function loadScript() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCpj_yy86awDeBynQJqZrgJCgxbf_BikVE&sensor=false&callback=initialize";
        document.body.appendChild(script);
    }
    window.onload = loadScript;
</script>
<style type="text/css">
    #map_canvas{
        padding-left: 0px;
    }
</style>
<div class="container">
    <div class="text-green text-center">
        <h1></br></h1>
    </div>
    <div class="portlet portlet-green">
        <div class="portlet-heading login-heading">
            <div class="portlet-title">
                <h4><i class="fa fa-plus-square"></i><strong> Regístrar Negocio</strong>
                </h4>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-md-4" style="padding-right: 0px">
            <div class="portlet-body">
                {{ Form::open(array('route' => 'addclinica','id' => 'formulario','role'=>'form')) }}
                <fieldset>
                    <label>Tipo de Negocio</label>

                    <div class="form-group">

                        <select autofocus class="form-control" name="tipo">
                            @for ($i = 0; $i < count($datos); $i++)
                            <option value="{{ $datos[$i]->id }}">{{ $datos[$i]->descripcion }}</option>
                            @endfor
                        </select>

                        {{ $errors->first('tipo','<p class="error_message">:message</p>') }}
                    </div>

                    <label>Nombre del Negocio</label>

                    <div class="form-group">
                        <input class="form-control" placeholder="nombre de clinica" name="descripcion"
                               type="text">
                        {{ $errors->first('descripcion','<p class="error_message">:message</p>') }}
                    </div>
                    <label>Dirección</label>

                    <div class="form-group">
                        <input class="form-control" autofocus placeholder="dirección" name="direccion" type="text">
                        {{ $errors->first('direccion','<p class="error_message">:message</p>') }}
                    </div>

                    <label>Latitud</label>

                    <div class="form-group">
                        <input class="form-control disabled" autofocus placeholder="escoger en mapa" readonly name="latitud" id="latitud" type="text">
                        {{ $errors->first('latitud','<p class="error_message">:message</p>') }}
                    </div>

                    <label>Longitud</label>

                    <div class="form-group">
                        <input class="form-control" autofocus placeholder="escoger en mapa" name="longitud" id="longitud" readonly type="text">
                        {{ $errors->first('longitud','<p class="error_message">:message</p>') }}
                    </div>

                    <button type="submit" class="btn btn-lg btn-green btn-block">
                        <strong>completar registro&nbsp;&nbsp;&nbsp;</strong><i class="fa fa-android"></i></button>
                </fieldset>
                <br>
                {{ Form::close() }}
            </div>
            </div>
            <div class="col-md-8" style="padding-left: 0px">

                <div id="map_canvas" class="table-responsive" style="width: 750dpi;height: 465px">

                </div>
            </div>
        </div>
    </div>
</div>

@overwrite