<?php


Route::get('/', function () {

    if (Auth::check()) {
        return View::make('layout');
    } else {
        return View::make('login');
    }
});

//rutas para el registro en la pagina web
Route::get('account/sing-up',['as' => 'sing_up', 'uses' => 'UsersController@singUp']);
Route::post('account/register',['as' => 'register', 'uses' => 'UsersController@register']);
Route::get('account/paso2',['as' => 'paso2', 'uses' => 'UsersController@addClinica']);
Route::post('account/addclinica',['as' => 'addclinica', 'uses' => 'ClinicasController@addClinica']);


//metedos para el login
Route::post('login', 'UsersController@login');
Route::get('/logout', 'UsersController@logout');


Route::group(array('before'=>'csrf'),function()
{
    Route::post('users/changePassword',['as' => 'changePassword', 'uses' => 'UsersController@changePassword']);
    Route::post('users/uploadImagen',['as' => 'uploadImagen', 'uses' => 'UsersController@uploadImagen']);
});


//clinicas
Route::get('/menu', 'ModulosController@getModulos');


//ruta para los usuarios normales
Route::group(array('before' => 'auth'), function()
{
    Route::get('users/getProfile',['as' => 'getProfile', 'uses' => 'UsersController@getPerfil']);
    Route::post('users/updateProfile',['as' => 'updateProfile', 'uses' => 'UsersController@updateProfile']);
    Route::get('profile',['as' => 'profile', 'uses' => 'UsersController@profile']);

    Route::get('getClinicasMaps',['as' => 'getClinicasMaps', 'uses' => 'ClinicasController@getClinicasMaps']);
    //pagina en clinica
    Route::get('clinica',['as' => 'clinica', 'uses' => 'ClinicasController@show']);
    Route::get('clinica/getClinica',['as' => 'getClinica', 'uses' => 'ClinicasController@find']);
    Route::post('clinica/updateClinica',['as' => 'updateClinica', 'uses' => 'ClinicasController@updateClinica']);

    Route::get('servicio/getServicios',['as' => 'getServicios', 'uses' => 'ServiciosController@getServicios']);
    Route::post('servicio/createService',['as' => 'createService', 'uses' => 'DetalleServiciosController@create']);
    Route::post('servicio/removeService',['as' => 'removeService', 'uses' => 'DetalleServiciosController@removeService']);

});


//rutas para el admin
Route::group(array('before' => 'auth|admin'), function()
{
    //crud clinicas
    Route::resource('clinicas', 'ClinicasController');
    Route::post('clinicas/list', array('before' => 'old', 'uses' => 'ClinicasController@listar'));
    Route::post('clinicas/update', array('before' => 'old', 'uses' => 'ClinicasController@editar'));
    Route::post('clinicas/create', array('before' => 'old', 'uses' => 'ClinicasController@nuevo'));
    Route::post('clinicas/delete', array('before' => 'old', 'uses' => 'ClinicasController@eliminar'));

    //crud users
    Route::post('users/list', array('before' => 'old', 'uses' => 'UsersController@listar'));
    Route::post('users/update', array('before' => 'old', 'uses' => 'UsersController@editar'));
    Route::post('users/create', array('before' => 'old', 'uses' => 'UsersController@nuevo'));
    Route::post('users/delete', array('before' => 'old', 'uses' => 'UsersController@eliminar'));

    //crud modulos
    Route::resource('modulos', 'ModulosController');
    Route::post('modulos/list', array('before' => 'old', 'uses' => 'ModulosController@listar'));
    Route::post('modulos/update', array('before' => 'old', 'uses' => 'ModulosController@editar'));
    Route::post('modulos/create', array('before' => 'old', 'uses' => 'ModulosController@nuevo'));
    Route::post('modulos/delete', array('before' => 'old', 'uses' => 'ModulosController@eliminar'));

});


App::missing(function($exception)
{
    return Response::view('error404', array(), 404);
});

//android
//Route::resource('listClinicas', 'ClinicasController@getIndex');
Route::get('android/listclinicas',['as' => 'listclinicas', 'uses' => 'ClinicasController@androidClinicas']);
Route::get('android/searchClinicas',['as' => 'searchClinicas', 'uses' => 'ClinicasController@searchClinicas']);
