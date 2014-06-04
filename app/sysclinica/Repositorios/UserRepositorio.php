<?php
/**
 * Created by PhpStorm.
 * User: ever
 * Date: 01/06/14
 * Time: 03:11 PM
 */

namespace sysclinica\Repositorios;


use sysclinica\Entidades\User;

class UserRepositorio {

    public function listar()
    {
        $rows = \DB::table('users')->count();

        if (\Input::get('jtSorting')) {

            $search = explode(" ", \Input::get('jtSorting'));
            $data = \DB::table('users')
                ->whereNull('deleted_at')
                ->skip(\Input::get('jtStartIndex'))
                ->take(\Input::get('jtPageSize'))
                ->orderBy($search[0], $search[1])
                ->get();
        } else {
            $data = \DB::table('users')
                ->skip(\Input::get('jtStartIndex'))
                ->whereNull('deleted_at')
                ->take(\Input::get('jtPageSize'))
                ->get();
        }
        return \Response::json(
            array(
                "Result" => "OK",
                "TotalRecordCount" => $rows,
                "Records" => $data
            )
        );
    }

    public function editar()
    {
        $user = User::find(\Input::get('id'));
        $user->nombres = \Input::get('nombres');
        $user->apellidos = \Input::get('apellidos');
        $user->email = \Input::get('email');
        $user->username = \Input::get('username');
        if ($user->save()) {
            return \Response::json(array(
                "Result" => 'OK'
            ));
        }
    }

    public function nuevo()
    {
        $users = new User();
        $users->nombres = \Input::get('nombres');
        $users->apellidos = \Input::get('apellidos');
        $users->email = \Input::get('email');
        $users->username = \Input::get('username');
        $users->save();

        $idmax = \DB::table('users')->max('id');

        $user = User::find($idmax);

        $toView = array(
            "id" => $user->id,
            "nombres" => $user->nombres,
            "apellidos" => $user->apellidos,
            "email" => $user->email,
            "username" => $user->username,
        );

        return \Response::json(array(
                "Result" => "OK",
                "Record" => $toView
            )
        );
    }

    public function eliminar()
    {
        $user = User::find(\Input::get('id'));
        if ($user->delete()) {
            return \Response::json(array(
                "Result" => 'OK'
            ));
        }
    }
} 