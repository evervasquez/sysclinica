@extends('layout')

@section('content')
<div class="page-content page-content-ease-in">

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                Perfil de Usuario
                <small>Información del usuario</small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="/">Operaciones</a>
                </li>
                <li class="active"> Perfil</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="portlet portlet-default">
<div class="portlet-body">
<ul id="userTab" class="nav nav-tabs">
    <li class="active"><a href="#overview" data-toggle="tab">Resumen</a>
    </li>
    <li><a href="#profile-settings" onclick="verPerfil()" data-toggle="tab">Actualizar Perfil</a>
    </li>
</ul>
<div id="userTabContent" class="tab-content">
<div class="tab-pane fade in active" id="overview">

    <div class="row">
        <div class="col-lg-2 col-md-3">


        </div>
        <div class="col-lg-7 col-md-5">
            <h1 class="page-header">{{ $datos->nombres.' '.$datos->apellidos }}</h1>

            <h3>Datos Personales</h3>

            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Dato Personal</th>
                        <th>Descripción</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nombres</td>
                        <td>{{ $datos->nombres }}</td>
                        @if($datos->nombres=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td>{{ $datos->apellidos }}</td>

                        @if($datos->apellidos=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Número de Telefono</td>
                        <td>{{ $datos->telefono }}</td>
                        @if($datos->telefono=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td>{{ $datos->direccion }}</td>
                        @if($datos->direccion=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Ciudad</td>
                        <td>{{ $datos->ciudad }}</td>
                        @if($datos->ciudad=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Distritos</td>
                        <td>{{ $datos->distrito }}</td>
                        @if($datos->distrito=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Correo Electronico</td>
                        <td>{{ $datos->email }}</td>
                        @if($datos->email=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Página Web</td>
                        <td>{{ $datos->web }}</td>
                        @if($datos->web=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>facebook</td>
                        <td>{{ $datos->facebook }}</td>
                        @if($datos->facebook=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>linkedin</td>
                        <td>{{ $datos->linkedin }}</td>
                        @if($datos->linkedin=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Google+</td>
                        <td>{{ $datos->google }}</td>
                        @if($datos->google=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Twitter</td>
                        <td>{{ $datos->twitter }}</td>
                        @if($datos->twitter=='')
                        <td>
                            <span class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pendiente</span>
                        </td>
                        @else
                        <td>
                            <a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> Actualizado</a>
                        </td>
                        @endif
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <h3>Contact Details</h3>

            <p><i class="fa fa-globe fa-muted fa-fw"></i> <a href="#">http://www.website.com</a>
            </p>

            <p><i class="fa fa-phone fa-muted fa-fw"></i> 1+(234) 555-2039</p>

            <p><i class="fa fa-building-o fa-muted fa-fw"></i> 8516 Market St.
                <br>Bayville, FL 55555</p>

            <p><i class="fa fa-envelope-o fa-muted fa-fw"></i> <a href="#">j.smith@website.com</a>
            </p>
            <ul class="list-inline">
                <li><a class="facebook-link" href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li><a class="twitter-link" href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li><a class="linkedin-link" href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li><a class="google-plus-link" href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>

</div>
<div class="tab-pane fade" id="profile-settings">

    <div class="row">
        <div class="col-sm-3">
            <ul id="userSettings" class="nav nav-pills nav-stacked">
                <li class="active"><a href="#basicInformation" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Información Básica</a>
                </li>
                <li><a href="#profilePicture" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i> Imagen de Perfil</a>
                </li>
                <li><a href="#changePassword" data-toggle="tab"><i class="fa fa-lock fa-fw"></i> Cambiar Contraseña</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9">
            <div id="userSettingsContent" class="tab-content">
                <div class="tab-pane fade in active" id="basicInformation">
                    {{ Form::open(array('route' => 'updateProfile','id' => 'formulario','role'=>'form')) }}
                        <h4 class="page-header">Información Personal:</h4>

                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" />
                            {{ $errors->first('nombres','<p class="error_message">:message</p>') }}
                        </div>
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos">
                            {{ $errors->first('apellidos','<p class="error_message">:message</p>') }}
                        </div>
                        <div class="form-group">
                            <label>Número de Teléfono</label>
                            <input type="tel" class="form-control" name="telefono" id="telefono">
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="direccion">
                        </div>
                        <div class="form-inline">
                            <div class="form-group">
                                <label>Ciudad </label>
                                <input type="text" class="form-control" name="ciudad" id="ciudad"/>
                            </div>
                            <div class="form-group">
                                <label> Distrito</label>
                                <input type="text" class="form-control" name="distrito" id="distrito" />
                            </div>
                        </div>
                        <h4 class="page-header">Detalle de Contacto:</h4>

                        <div class="form-group">
                            <label><i class="fa fa-envelope-o fa-fw"></i> Correo Electronico</label>
                            <input type="email" class="form-control" name="email" id="email"/>
                            {{ $errors->first('email','<p class="error_message">:message</p>') }}
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-globe fa-fw"></i> Página Web</label>
                            <input type="url" class="form-control" name="web" id="web"/>
                        </div>

                        <h4 class="page-header">Perfiles Sociales:</h4>

                        <div class="form-group">
                            <label><i class="fa fa-facebook fa-fw"></i> Facebook  Perfil URL</label>
                            <input type="url" class="form-control" name="facebook" id="facebook"/>
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-linkedin fa-fw"></i> LinkedIn Perfil URL</label>
                            <input type="url" class="form-control" name="linkedin" id="linkedin"/>
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-google-plus fa-fw"></i> Google+ Perfil URL</label>
                            <input type="url" class="form-control" name="google" id="google"/>
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-twitter fa-fw"></i> Twitter Usuario</label>
                            <input type="text" class="form-control" name="twitter" id="twitter"/>
                        </div>
                        <button type="submit" class="btn btn-default">Actualizar Perfil</button>
                        <button class="btn btn-green">Cancelar</button>
                    {{ Form::close() }}
                </div>
                <div class="tab-pane fade" id="profilePicture">
                    <h3>Imagen de Perfil:</h3>
                    {{HTML::image('assets/img/'.Auth::user()->urlimagen,'Imagen no encontrada',array('class' => 'img-responsive img-profile'))}}

                    <br>

                    {{ Form::open(array('route' => 'uploadImagen','files' => true,'role'=>'form')) }}
                        <div class="form-group">
                            <label>Elija una nueva Imagen</label>
                            <input type="file" name="imagen" id="imagen" />

                            <p class="help-block"><i class="fa fa-warning"></i> La imagen no debe ser mayor a  266x400
                                pixels. Formatos Sportados: JPG, GIF, PNG</p>
                            <button type="submit" class="btn btn-default">Actualizar Imágen de Perfil</button>
                            <button class="btn btn-green">Cancelar</button>
                        </div>
                    {{ Form::close() }}
                </div>
                <div class="tab-pane fade in" id="changePassword">
                    <h3>Cambiar Contraseña:</h3>

                    {{ Form::open(array('route' => 'changePassword','id' => 'formulario','role'=>'form')) }}
                        <div class="form-group">
                            <label>Contraseña Antigua</label>
                            <input type="password" class="form-control" name="old_password" />
                            {{ $errors->first('old_password','<p class="error_message">:message</p>') }}
                        </div>
                        <div class="form-group">
                            <label>Nueva Contraseña</label>
                            <input type="password" class="form-control" name="password" />
                            {{ $errors->first('password','<p class="error_message">:message</p>') }}
                        </div>
                        <div class="form-group">
                            <label>Repita nueva Contraseña</label>
                            <input type="password" class="form-control" name="password_again" />
                            {{ $errors->first('password_again','<p class="error_message">:message</p>') }}
                        </div>
                        <button type="submit" class="btn btn-default">Actualizar Contraseña</button>
                        <button class="btn btn-green">Cancelar</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<!-- /.portlet-body -->
</div>
</div>
@overwrite