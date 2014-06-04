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
    {{ HTML::style('assets/css/messenger.css'); }}
    {{ HTML::style('assets/css/messenger-theme-flat.css'); }}

    {{-- {{ HTML::style('assets/css/daterangepicker-bs3.css'); }} --}}
    {{-- {{ HTML::style('assets/css/jquery-jvectormap-1.2.2.css'); }} --}}
    {{ HTML::style('assets/scripts/jqueryui/css/start/jquery-ui-1.10.4.custom.css'); }}
    {{ HTML::style('assets/scripts/jTable/themes/lightcolor/blue/jtable.css'); }}

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

<body>

<div id="wrapper">

<!-- begin TOP NAVIGATION -->
<nav class="navbar-top" role="navigation">

    <!-- begin BRAND HEADING -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
            <i class="fa fa-bars"></i> Menu
        </button>
        <div class="navbar-brand">
                {{HTML::image('assets/img/flex-admin-logo.png','',array('data-1x'=>'assets/img/flex-admin-logo@1x.png','class' => 'hisrc img-responsive'))}}
        </div>
    </div>
    <!-- end BRAND HEADING -->

    <div class="nav-top">

        <!-- begin LEFT SIDE WIDGETS -->
        <ul class="nav navbar-left">
            <li class="tooltip-sidebar-toggle">
                <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
            <!-- You may add more widgets here using <li> -->
        </ul>


    </div>
    <!-- /.nav-top -->
</nav>
<!-- /.navbar-top -->
<!-- end TOP NAVIGATION -->

<!-- begin SIDE NAVIGATION -->
<nav class="navbar-side" role="navigation">
<div class="navbar-collapse sidebar-collapse collapse">



{{-- menu --}}
<ul class="nav navbar-nav side-nav _menu">

<!-- begin SIDE NAV USER PANEL -->
<li class="side-user hidden-xs">
    {{HTML::image(Auth::user()->urlimagen,'Imagen no encontrada',array('class' => 'img-circle'))}}

    <p class="welcome">
        <i class="fa fa-key"></i> Iniciado sesión como
    </p>

    <p class="name tooltip-sidebar-logout">
        {{ Auth::user()->nombres }}
        <span class="last-name">{{ Auth::user()->apellidos }}</span> <a style="color: inherit" class="logout_open" href="#logout"
                                                data-toggle="tooltip" data-placement="top" title="Logout"><i
                class="fa fa-sign-out"></i></a>
    </p>
</li>

</ul>
{{-- end menu --}}

<!-- /.side-nav -->
</div>
<!-- /.navbar-collapse -->
</nav>
<!-- /.navbar-side -->
<!-- end SIDE NAVIGATION -->

{{-- begin contenido --}}


<div id="page-wrapper">

    <div class="page-content">

@section('content')

        <!-- begin DASHBOARD CIRCLE TILES -->
        <div class="row">
            </br>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading dark-blue">
                            <i class="fa fa-users fa-fw fa-3x"></i>
                        </div>
                    </a>

                    <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded">
                            Users
                        </div>
                        <div class="circle-tile-number text-faded">
                            265
                            <span id="sparklineA"></span>
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading green">
                            <i class="fa fa-money fa-fw fa-3x"></i>
                        </div>
                    </a>

                    <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded">
                            Revenue
                        </div>
                        <div class="circle-tile-number text-faded">
                            $32,384
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading orange">
                            <i class="fa fa-bell fa-fw fa-3x"></i>
                        </div>
                    </a>

                    <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded">
                            Alerts
                        </div>
                        <div class="circle-tile-number text-faded">
                            9 New
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading blue">
                            <i class="fa fa-tasks fa-fw fa-3x"></i>
                        </div>
                    </a>

                    <div class="circle-tile-content blue">
                        <div class="circle-tile-description text-faded">
                            Tasks
                        </div>
                        <div class="circle-tile-number text-faded">
                            10
                            <span id="sparklineB"></span>
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading red">
                            <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                        </div>
                    </a>

                    <div class="circle-tile-content red">
                        <div class="circle-tile-description text-faded">
                            Orders
                        </div>
                        <div class="circle-tile-number text-faded">
                            24
                            <span id="sparklineC"></span>
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="#">
                        <div class="circle-tile-heading purple">
                            <i class="fa fa-comments fa-fw fa-3x"></i>
                        </div>
                    </a>

                    <div class="circle-tile-content purple">
                        <div class="circle-tile-description text-faded">
                            Mentions
                        </div>
                        <div class="circle-tile-number text-faded">
                            96
                            <span id="sparklineD"></span>
                        </div>
                        <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end DASHBOARD CIRCLE TILES -->

        <!-- /.row -->
@show
    </div>
    <!-- /.page-content -->
</div>

<!-- /#page-wrapper -->
<!-- end MAIN PAGE CONTENT -->

</div>
<!-- /#wrapper -->

<!-- Logout Notification Box -->
<div id="logout">
    <div class="logout-message">
        {{HTML::image(Auth::user()->urlimagen,'Imagen no encontrada',array('class' => 'img-circle'))}}

        <h3>
            <i class="fa fa-sign-out text-green"></i> A donde quiere ir?
        </h3>

        <p>Seleccione "Salir" si está listo
            <br> para finalizar la sesión actual.</p>
        <ul class="list-inline">
            <li>
                <a href="logout" class="btn btn-green">
                    <strong>Salir</strong>
                </a>
            </li>
            <li>
                <button class="logout_close btn btn-green">Cancelar</button>
            </li>
        </ul>
    </div>
</div>


{{ HTML::script('assets/scripts/jqueryui/js/jquery-ui-1.10.4.custom.min.js') }}
{{ HTML::script('assets/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/js/jquery.popupoverlay.js') }}
{{ HTML::script('assets/js/defaults.js') }}
{{ HTML::script('assets/scripts/jTable/jquery.jtable.js') }}

{{-- HISRC Retina Images --}}
{{ HTML::script('assets/js/logout.js'); }}
{{ HTML::script('assets/js/hisrc.js'); }}

{{-- PAGE LEVEL PLUGIN SCRIPTS --}}
{{-- HubSpot Messenger --}}

{{ HTML::script('assets/js/messenger.min.js'); }}
{{ HTML::script('assets/js/messenger-theme-flat.js'); }}

{{-- THEME SCRIPTS --}}
{{ HTML::script('assets/js/flex.js'); }}
{{ HTML::script('assets/js/main.js'); }}

</body>

</html>
