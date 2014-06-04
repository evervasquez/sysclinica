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

<div class="container">
</br></br>
<div class="span10 offset1">
<h4></br></h4>
<div class="tabbable custom-tabs tabs-animated  flat flat-all hide-label-980 shadow track-url auto-scroll">
<ul class="nav nav-tabs">
    <li class="active"><a href="#panel1" data-toggle="tab" class="active "><i class="glyphicon glyphicon-lock"></i>&nbsp;<span>Inicio Sesión</span></a>
    </li>
    <li class=""><a href="#panel2" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>&nbsp;<span>Registrar Usuario</span></a></li>
    <li class=""><a href="#panel3" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i>&nbsp;<span>Registrar Clinica</span></a></li>
    <li class=""><a href="#panel4" data-toggle="tab"><i class="glyphicon glyphicon-map-marker"></i>&nbsp;<span>Maps</span></a>
    </li>
</ul>
<div class="tab-content ">
    <div class="tab-pane active" id="panel1">
        <div class="row-fluid">
            <div class="span5">
                {{ Form::open(array('url' => 'login','id' => 'formulario','action' => 'login','role'=>'form')) }}
                <h4><i class="icon-user"></i>&nbsp;&nbsp; Inicia Sesión</h4>
                <label>usuario</label>
                <input type="text" name="username" class="input-block-level">
                <label>contraseña</label>
                <input type="password" name="password" class="input-block-level">

                <br>

                <button type="submit" class="btn btn-green">Iniciar&nbsp;&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i></button>
                {{ Form::close() }}
            </div>
            <div class="span3">
                <h4><i class="icon-expand-alt"></i>&nbsp;&nbsp;Social</h4>

                <div class="socials clearfix">
                    <a class="fa fa-facebook facebook"></a>
                    <a class="fa fa-twitter twitter"></a>
                    <a class="fa fa-google-plus google-plus"></a>
                    <a class="fa fa-pinterest pinterest"></a>
                    <a class="fa fa-linkedin linked-in"></a>
                    <a class="fa fa-github-alt github"></a>
                </div>
            </div>
            <div class="span4">
                <h4><i class="icon-question"></i>&nbsp;&nbsp;Registration</h4>

                <div class="box">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in.
                    </p>
                </div>
                <div class="box">
                    Don't Have An Account.<br>
                    Click Here For <a href="#" data-toggle="tab">Free Register</a>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="panel2">
        <div class="row-fluid">
            <div class="span5">
                <h4><i class="icon-user"></i>&nbsp;&nbsp; Registrarce aquí</h4>
                <label>Usuario</label>
                <input type="text" class="input-block-level">
                <label>Contraseña </label>
                <input type="password" class="input-block-level">
                <label>Repetir Contraseña</label>
                <input type="password" class="input-block-level">

                <br>

                <a href="#" class="btn btn-blue">Registrarce&nbsp;&nbsp;&nbsp;<i class="fa fa-user-md"></i></a>

            </div>
            <div class="span3">
                <h4><i class="icon-expand-alt"></i>&nbsp;&nbsp;Social</h4>

                <div class="socials clearfix">
                    <a class="fa fa-facebook facebook"></a>
                    <a class="fa fa-twitter twitter"></a>
                    <a class="fa fa-google-plus google-plus"></a>
                    <a class="fa fa-pinterest pinterest"></a>
                    <a class="fa fa-linkedin linked-in"></a>
                    <a class="fa fa-github-alt github"></a>
                </div>
            </div>
            <div class="span4">
                <h4><i class="icon-question"></i>&nbsp;&nbsp;Login</h4>

                <div class="box">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in.
                    </p>
                </div>
                <div class="box">
                    Already Have An Account.<br>
                    Click Here For <a href="#" data-toggle="tab">Login</a>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane" id="panel3">
        <div class="row-fluid">
            <div class="span5">
                <h4><i class="icon-unlock"></i>&nbsp;&nbsp;Password Recovery</h4>

                <label>Email</label>
                <input type="text" class="input-block-level">
                <label>Security Question</label>
                <select class="input-block-level">
                    <option disabled="disabled" selected="selected">---Select---</option>
                    <option>Which Is Your First Mobile</option>
                    <option>What Is Your Pet Name</option>
                    <option>What Is Your Mother Name</option>
                    <option>Which Is Your First Game</option>
                </select>
                <label>Answer</label>
                <input type="text" class="input-block-level">
                <br>
                <br>
                <a href="#" class=" btn  ">Recover Password&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>
            </div>
            <div class="span7">
                <h4><i class="icon-question"></i>&nbsp;&nbsp;Help</h4>

                <div class="box">
                    <p>Getting Error With Password Recovery Click Here For <a href="#">Support</a></p>
                    <ul>


                        <li>Vestibulum pharetra lectus montes lacus!</li>
                        <li>Iaculis lectus augue pulvinar taciti.</li>
                    </ul>

                </div>
                <div class="box">
                    <ul>
                        <li>Potenti facilisis felis sociis blandit euismod.</li>
                        <li>Odio mi hendrerit ad nostra.</li>
                        <li>Rutrum mi commodo molestie taciti.</li>
                        <li>Interdum ipsum ad risus conubia, porttitor.</li>
                        <li>Placerat litora, proin hac hendrerit ac volutpat.</li>
                        <li>Ornare, aliquam condimentum habitasse.</li>
                    </ul>

                </div>
            </div>
        </div>


    </div>
    <div id="panel4" class="tab-pane">
        <div class="row-fluid">
            <div class="span5">
                <h4><i class="icon-envelope-alt"></i>&nbsp;&nbsp;Contact Us</h4>
                <label>Name</label>
                <input type="text" value="" id="" class="input-block-level">
                <label>Email</label>
                <input type="text" value="" id="Text1" class="input-block-level">
                <label>Mobile No</label>
                <input type="text" value="" id="Text2" class="input-block-level">
                <label>Message</label>
                <textarea class="input-block-level" rows="5"></textarea>
                <a href="#" class=" btn ">Send Message&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>
                <br class="visible-phone">
                <br class="visible-phone">
            </div>
            <div class="span7">
                <div class="row-fluid">
                    <div class="span12">
                        <h4><i class="icon-location-arrow"></i>&nbsp;&nbsp;Locate Us</h4>

                        <div class="map"></div>

                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                        <h4><i class="icon-envelope-alt"></i>&nbsp;&nbsp;Contact Us</h4>
                        <address>
                            <strong>Full Name</strong><br>
                            <a href="mailto:#">first.last@example.com</a>
                        </address>
                    </div>
                    <div class="span6">
                        <h4><i class="icon-location-arrow"></i>&nbsp;&nbsp;Our Address</h4>

                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr>
                            (123) 456-7890
                        </address>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

</div>
</div>
</div>

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