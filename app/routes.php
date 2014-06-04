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
Route::resource('users', 'UsersController');
Route::post('users/list', array('before' => 'old', 'uses' => 'UsersController@listar'));
Route::post('users/update', array('before' => 'old', 'uses' => 'UsersController@editar'));
Route::post('users/create', array('before' => 'old', 'uses' => 'UsersController@nuevo'));
Route::post('users/delete', array('before' => 'old', 'uses' => 'UsersController@eliminar'));

//clinicas
Route::resource('clinicas', 'ClinicasController');
Route::post('clinicas/list', array('before' => 'old', 'uses' => 'ClinicasController@listar'));
Route::post('clinicas/update', array('before' => 'old', 'uses' => 'ClinicasController@editar'));
Route::post('clinicas/create', array('before' => 'old', 'uses' => 'ClinicasController@nuevo'));
Route::post('clinicas/delete', array('before' => 'old', 'uses' => 'ClinicasController@eliminar'));


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
