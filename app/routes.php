<?php


Route::get('/', function () {

    if (Auth::check()) {
        return View::make('layout');
    } else {
        return View::make('login');
    }
});

Route::get('/menu', 'ModulosController@getModulos');

//metedos para el login
Route::post('login', 'UsersController@login');
Route::get('/logout', 'UsersController@logout');

//rutas de clinicas


//modulos
Route::resource('modulos', 'ModulosController');
Route::post('modulos/list', array('before' => 'old', 'uses' => 'ModulosController@listar'));
Route::post('modulos/update', array('before' => 'old', 'uses' => 'ModulosController@editar'));
Route::post('modulos/create', array('before' => 'old', 'uses' => 'ModulosController@nuevo'));
Route::post('modulos/delete', array('before' => 'old', 'uses' => 'ModulosController@eliminar'));

//users
Route::post('users/list', array('before' => 'old', 'uses' => 'UsersController@listar'));
Route::post('users/update', array('before' => 'old', 'uses' => 'UsersController@editar'));
Route::post('users/create', array('before' => 'old', 'uses' => 'UsersController@nuevo'));
Route::post('users/delete', array('before' => 'old', 'uses' => 'UsersController@eliminar'));
Route::get('profile',['as' => 'profile', 'uses' => 'UsersController@profile']);

Route::get('users/getProfile',['as' => 'getProfile', 'uses' => 'UsersController@getPerfil']);
Route::post('users/updateProfile',['as' => 'updateProfile', 'uses' => 'UsersController@updateProfile']);

Route::group(array('before'=>'csrf'),function()
{
    Route::post('users/changePassword',['as' => 'changePassword', 'uses' => 'UsersController@changePassword']);
    Route::post('users/uploadImagen',['as' => 'uploadImagen', 'uses' => 'UsersController@uploadImagen']);
});


//clinicas
Route::resource('clinicas', 'ClinicasController');
Route::post('clinicas/list', array('before' => 'old', 'uses' => 'ClinicasController@listar'));
Route::post('clinicas/update', array('before' => 'old', 'uses' => 'ClinicasController@editar'));
Route::post('clinicas/create', array('before' => 'old', 'uses' => 'ClinicasController@nuevo'));
Route::post('clinicas/delete', array('before' => 'old', 'uses' => 'ClinicasController@eliminar'));

//pagina en clinica
Route::get('clinica',['as' => 'clinica', 'uses' => 'ClinicasController@show']);
Route::get('clinica/getClinica',['as' => 'getClinica', 'uses' => 'ClinicasController@find']);
Route::post('clinica/updateClinica',['as' => 'updateClinica', 'uses' => 'ClinicasController@updateClinica']);

Route::get('servicio/getServicios',['as' => 'getServicios', 'uses' => 'ServiciosController@getServicios']);
Route::post('newService',['as' => 'createService', 'uses' => 'DetalleServiciosController@create']);

//rutas para el registro en la pagina web
Route::get('account/sing-up',['as' => 'sing_up', 'uses' => 'UsersController@singUp']);
Route::post('account/register',['as' => 'register', 'uses' => 'UsersController@register']);


Route::get('account/paso2',['as' => 'paso2', 'uses' => 'UsersController@addClinica']);
Route::post('account/addclinica',['as' => 'addclinica', 'uses' => 'ClinicasController@addClinica']);


//android
//Route::resource('listClinicas', 'ClinicasController@getIndex');
Route::get('listclinicas', function () {
    $data = DB::table('clinicas')
        ->whereNull('deleted_at')
        ->get();

    return Response::json(array(
        "Result" => 'OK',
        "Android" => $data
    ));
});
