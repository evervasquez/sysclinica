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

    public function editar($data)
    {
        $user = User::find(\Auth::user()->id);
        $user->nombres = $data['nombres'];
        $user->apellidos = $data['apellidos'];
        $user->email = $data['email'];
        $user->username = \Auth::user()->username;

        $user->telefono = $data['telefono'];
        $user->web = $data['web'];
        $user->ciudad = $data['ciudad'];
        $user->distrito = $data['distrito'];
        $user->direccion = $data['direccion'];

        $user->facebook = $data['facebook'];
        $user->linkedin = $data['linkedin'];
        $user->google = $data['google'];
        $user->twitter = $data['twitter'];

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

    public function nuevoUser($data)
    {

        $users = new User();
        $users->nombres = $data['username'];
        $users->apellidos = $data['username'];
        $users->email = $data['email'];
        $users->email = $data['email'];
        $users->username = $data['username'];
        $users->password = $data['password'];
        $users->save();

        $idmax = \DB::table('users')->max('id');

        $user = User::find($idmax);

        if ($user->delete()) {
            return $user;
        }
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

    public function show($id)
    {
        return User::find($id);
    }

    public function changePassword($data)
    {
        $user = User::find(\Auth::user()->id);

        $old_password = $data['old_password'];
        $password = $data['password'];

        if(\Hash::check($old_password, $user->getAuthPassword()))
        {
            $user->password = $password;
            return $user->save();
        }
    }

    public function updateImagen($file)
    {

        $user = User::find(\Auth::user()->id);
        $user->urlimagen = $file->getClientOriginalName();
        return $user->save();

    }

    public function newUser()
    {
        return new User();
    }
} 