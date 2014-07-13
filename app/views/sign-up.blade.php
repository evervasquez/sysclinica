<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sysclinica Admin</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    {{ HTML::style('assets/css/pace.css'); }}
    {{ HTML::script('assets/js/pace.js'); }}

    <!-- GLOBAL STYLES - Include these on every page. -->
    {{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}
    {{
    HTML::style('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic');
    }}
    {{
    HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css'); }}

    <!-- PAGE LEVEL PLUGIN STYLES -->
    {{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}

    {{-- THEME STYLES --}}
    {{ HTML::style('assets/css/style.css'); }}
    {{ HTML::style('assets/css/plugins.css'); }}

    {{-- THEME DEMO STYLES --}}
    {{ HTML::style('assets/css/demo.css'); }}

    <!--[if lt IE 9]>
    {{ HTML::script('assets/js/html5shiv.js'); }}
    {{ HTML::script('assets/js/respond.min.js'); }}
    <![endif]-->
    {{ HTML::script('assets/scripts/jqueryui/js/jquery-1.10.2.js'); }}
</head>
<style type="text/css">
    html, body {width: 100%; height: 100%}
    body {margin-top: 0px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px}
</style>
<body>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="text-green text-center">
                <h1></br></h1>
            </div>
            <div class="portlet portlet-green">
                <div class="portlet-heading login-heading">
                    <div class="portlet-title">
                        <h4><i class="fa fa-plus-square"></i><strong> Regístrate como usuario</strong>
                        </h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body">
                    {{ Form::open(array('route' => 'register','id' => 'formulario','action' => 'login','role'=>'form')) }}
                    <fieldset>
                        <label>Usuario</label>
                        <div class="form-group">
                            <input class="form-control" autofocus placeholder="usuario" name="username" type="text">
                            {{ $errors->first('username','<p class="error_message">:message</p>') }}
                        </div>
                        <label>Email</label>
                        <div class="form-group">
                            <input class="form-control" autofocus placeholder="email" name="email" type="text">
                            {{ $errors->first('email','<p class="error_message">:message</p>') }}
                        </div>
                        <label>Contraseña</label>
                        <div class="form-group">
                            <input class="form-control" placeholder="contraseña" name="password" type="password" >
                            {{ $errors->first('password','<p class="error_message">:message</p>') }}
                        </div>
                        <label>Confirme Contraseña</label>
                        <div class="form-group">
                            <input class="form-control" placeholder="confirme contraseña" name="password_confirmation" type="password" >
                            {{ $errors->first('password_confirmation','<p class="error_message">:message</p>') }}
                        </div>

                        <button type="submit" class="btn btn-lg btn-green btn-block">
                            <strong>paso 2&nbsp;&nbsp;&nbsp;</strong><i class="fa fa-hand-o-right"></i></button>
                    </fieldset>
                    <br>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
        </div>

    @show

    {{ HTML::script('assets/scripts/jqueryui/js/jquery-ui-1.10.4.custom.min.js') }}

</body>

</html>