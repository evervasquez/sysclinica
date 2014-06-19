@extends('layout')

@section('content')

<div class="page-content page-content-ease-in">

<!-- begin PAGE TITLE ROW -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                Datos de clinica
                <small>Información de la clinica</small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> <a href="/">Operaciones</a>
                </li>
                <li class="active"> Clinica</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE ROW -->

<div class="row">
<div class="col-lg-12">

<div class="portlet portlet-default">
<div class="portlet-body">
<ul id="userTab" class="nav nav-tabs">
    <li class="active"><a href="#overview" data-toggle="tab">Resumen</a>
    </li>
    <li><a href="#profile-settings" data-toggle="tab" onclick="getClinicas()">Actualizar Clinica</a>
    </li>
</ul>
<div id="userTabContent" class="tab-content">
<div class="tab-pane fade in active" id="overview">

    <div class="row">
        <div class="col-lg-2 col-md-3">

        </div>
        <div class="col-lg-7 col-md-5">
            <h1>John Smith</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum
                dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in
                faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Etiam placerat nunc ut tellus tristique, non posuere neque iaculis.</p>
            <ul class="list-inline">
                <li><i class="fa fa-map-marker fa-muted"></i> Bayville, FL</li>
                <li><i class="fa fa-user fa-muted"></i> Administrator</li>
                <li><i class="fa fa-group fa-muted"></i> Sales, Marketing, Management</li>
                <li><i class="fa fa-trophy fa-muted"></i> Top Seller</li>
                <li><i class="fa fa-calendar fa-muted"></i> Member Since: 5/13/11</li>
            </ul>
            <h3>Recent Sales</h3>

            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1/31/14</td>
                        <td>6:14 PM</td>
                        <td>$12.07</td>
                        <td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1/31/14</td>
                        <td>6:02 PM</td>
                        <td>$5.32</td>
                        <td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1/31/14</td>
                        <td>5:56 PM</td>
                        <td>$6.58</td>
                        <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1/31/14</td>
                        <td>5:12 PM</td>
                        <td>$15.61</td>
                        <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1/31/14</td>
                        <td>5:02 PM</td>
                        <td>$9.89</td>
                        <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1/31/14</td>
                        <td>4:47 PM</td>
                        <td>$2.21</td>
                        <td><a class="btn btn-xs btn-red"><i class="fa fa-warning"></i> Error</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1/31/14</td>
                        <td>4:32 PM</td>
                        <td>$5.17</td>
                        <td><a class="btn btn-xs btn-default"><i class="fa fa-arrow-circle-right"></i> Special Order</a>
                        </td>
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
                <li class="active"><a href="#basicInformation" data-toggle="tab"><i class="fa fa-user fa-fw"></i>
                        Información Básica</a>
                </li>
                <li><a href="#profilePicture" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i> Imagen de Clinica</a>
                </li>
                <li><a href="#changePassword" data-toggle="tab"><i class="fa fa-medkit fa-fw"></i> Servicios</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9">
            <div id="userSettingsContent" class="tab-content">
                <div class="tab-pane fade in active" id="basicInformation">

                    {{ Form::open(array('route' => 'updateClinica','id' => 'formulario','role'=>'form')) }}
                    <h4 class="page-header">Información de la clinica:</h4>
                    <input type="hidden" class="form-control" name="idclinica" id="idclinica"/>
                    <input type="hidden" class="form-control" name="latitud" id="latitud"/>
                    <input type="hidden" class="form-control" name="longitud" id="longitud"/>
                    <div class="form-group">
                        <label> Nombre</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion"/>
                        {{ $errors->first('descripcion','<p class="error_message">:message</p>') }}
                    </div>
                    <div class="form-group">
                        <label> Razón Social</label>
                        <input type="text" class="form-control" name="razon_social" id="razon_social">
                        {{ $errors->first('razon_social','<p class="error_message">:message</p>') }}
                    </div>
                    <div class="form-group">
                        <label> Número Telefónico</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono"/>
                        {{ $errors->first('telefono','<p class="error_message">:message</p>') }}
                    </div>
                    <div class="form-group">
                        <label> Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion"/>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label> Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad"/>
                        </div>
                        <div class="form-group">
                            <label> Distrito</label>
                            <input type="text" class="form-control" name="distrito" id="distrito"/>
                        </div>
                    </div>

                    <h4 class="page-header"> Detalle de Contacto:</h4>

                    <div class="form-group">
                        <label><i class="fa fa-envelope-o fa-fw"></i> Correo Electronico</label>
                        <input type="email" class="form-control" name="email" id="email"/>
                        {{ $errors->first('email','<p class="error_message">:message</p>') }}
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-globe fa-fw"></i> Página Web</label>
                        <input type="url" class="form-control" name="web" id="web"/>
                    </div>

                    <h4 class="page-header"> Información de Clinica:</h4>

                    <div class="form-group">
                        <label><i class="fa fa-info fa-fw"></i> Presentación</label>
                        <textarea class="form-control" rows="3" name="resumen" id="resumen"></textarea>
                    </div>
                    <h4 class="page-header">Perfiles Sociales:</h4>

                    <div class="form-group">
                        <label><i class="fa fa-facebook fa-fw"></i> Facebook</label>
                        <input type="url" class="form-control" name="facebook" id="facebook"/>
                    </div>

                    <div class="form-group">
                        <label><i class="fa fa-twitter fa-fw"></i> Twitter Usuario</label>
                        <input type="text" class="form-control" name="twitter" id="twitter"/>
                    </div>
                    <button type="submit" class="btn btn-default">Actualizar</button>
                    <button class="btn btn-green">Cancelar</button>
                    {{ Form::close() }}
                </div>
                <div class="tab-pane fade" id="profilePicture">
                    <h3>Current Picture:</h3>
                    <img class="img-responsive img-profile" src="img/profile-full.jpg" alt="">
                    <br>

                    <form role="form">
                        <div class="form-group">
                            <label>Choose a New Image</label>
                            <input type="file">

                            <p class="help-block"><i class="fa fa-warning"></i> Image must be no larger than 500x500
                                pixels. Supported formats: JPG, GIF, PNG</p>
                            <button type="submit" class="btn btn-default">Update Profile Picture</button>
                            <button class="btn btn-green">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade in" id="changePassword">
                    <h3> Servicios :</h3>

                    <div class="control-group">
                        {{ Form::open(array('route' => 'createService','id' => 'formulario','role'=>'form')) }}
                        <input  type="hidden" name="idclinicaServicio" id="idclinicaServicio"/>
                        <div class="controls" id="servicios">
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<!-- /.portlet-body -->
</div>
<!-- /.portlet -->


</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

</div>

@overwrite