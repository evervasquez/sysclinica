@extends('layout')

@section('content')
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>
                        404 Error
                        <small>Pagina no encontrada</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>  <a href="/">Inicio</a>
                        </li>
                        <li class="active">404 Error</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <h1 class="error-title">404</h1>
                <h4 class="error-msg"><i class="fa fa-warning text-red"></i> Página no encontrada</h4>
                <p class="lead">La página que ha solicitado no se ha encontrado en el servidor. Por favor, póngase en contacto con su webmaster, o utilizar el botón Atrás en su navegador para navegar de vuelta a su página activa más reciente.</p>
                <ul class="list-inline">
                    <li>
                        <a class="btn btn-default" href="/">Retroceder al inicio</a>
                    </li>
                    <li>
                        <a class="logout_open btn btn-red" href="/logout" data-popup-ordinal="2" id="open_51033238">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
@overwrite