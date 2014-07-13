<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>sysclinica</title>
    {{-- GLOBAL STYLES --}}
    {{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}
    {{ HTML::style('assets/css/bootstrap-responsive.min.css'); }}
    {{ HTML::style('assets/css/preview.min.css'); }}
    {{
    HTML::style('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic');
    }}
    {{
    HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    }}

    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css'); }}

    {{-- THEME STYLES --}}
    {{ HTML::style('assets/css/style.css'); }}
    {{ HTML::style('assets/css/plugins.css'); }}

    {{-- THEME DEMO STYLES --}}
    {{ HTML::style('assets/css/demo.css'); }}

    <!--[if lt IE 9]>
    {{ HTML::script('assets/js/html5shiv.js'); }}
    {{ HTML::script('assets/js/respond.min.js'); }}
    <![endif]-->

</head>

<body class="login">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-banner text-center">
                <h1><i class="fa fa-gears"></i> Sysclinica Admin</h1>
            </div>
            <div class="portlet portlet-green">
                <div class="portlet-heading login-heading">
                    <div class="portlet-title">
                        <h4><strong>Login Sysclinica Admin!</strong>
                        </h4>
                    </div>
                    <div class="portlet-widgets">
                        <a class="btn btn-blue btn-xs"  href="{{ route('sing_up') }}"><i class="fa fa-plus-circle"></i> Nuevo Usuario</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body">
                    {{ Form::open(array('url' => 'login','id' => 'formulario','action' => 'login','role'=>'form')) }}

                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" autofocus placeholder="usuario" name="username" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="contraseña" name="password" type="password"
                                   value="">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg btn-green btn-block">
                            <strong>iniciar&nbsp;&nbsp;&nbsp;</strong><i class="fa fa-hand-o-right"></i></button>
                    </fieldset>
                    <br>
                    {{ Form::close() }}
                    @if (Session::has('global'))
                    <span class="help-block alert alert-success"><i class="fa fa-check "></i> {{ Session::get('global') }}</span>
                    @endif

                    @if (Session::has('error'))
                    <span class="help-block alert alert-danger"><i class="fa fa-warning"></i> {{ Session::get('error') }}</span>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
@show

<!-- GLOBAL SCRIPTS -->
{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'); }}
{{ HTML::script('assets/bootstrap/js/bootstrap.min.js'); }}
{{ HTML::script('assets/js/jquery.slimscroll.min.js'); }}
{{ HTML::script('assets/js/hisrc.js'); }}


<!-- PAGE LEVEL PLUGIN SCRIPTS -->

<!-- THEME SCRIPTS -->
{{ HTML::script('assets/js/flex.js'); }}

</body>

</html>