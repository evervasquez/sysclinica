<?php
/**
 * Created by PhpStorm.
 * clinica: ever
 * Date: 01/06/14
 * Time: 03:28 PM
 */

namespace sysclinica\Repositorios;


use sysclinica\Entidades\Clinica;

class ClinicaRepositorio {

    public function listar()
    {
        $rows = \DB::table('clinicas')->count();

        if (\Input::get('jtSorting')) {

            $search = explode(" ", \Input::get('jtSorting'));
            $data = \DB::table('clinicas')
                ->whereNull('deleted_at')
                ->skip(\Input::get('jtStartIndex'))
                ->take(\Input::get('jtPageSize'))
                ->orderBy($search[0], $search[1])
                ->get();
        } else {
            $data = \DB::table('clinicas')
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
        $clinica = clinica::find(\Input::get('id'));
        $clinica->iduser = \Auth::user()->id;
        $clinica->descripcion = \Input::get('descripcion');
        $clinica->direccion = \Input::get('direccion');
        $clinica->latitud = \Input::get('latitud');
        $clinica->longitud = \Input::get('longitud');
        if ($clinica->save()) {
            return \Response::json(array(
                "Result" => 'OK'
            ));
        }
    }

    public function nuevo()
    {
        $clinicas = new clinica();
        $clinicas->iduser = \Auth::user()->id;
        $clinicas->descripcion = \Input::get('descripcion');
        $clinicas->direccion = \Input::get('direccion');
        $clinicas->latitud = \Input::get('latitud');
        $clinicas->longitud = \Input::get('longitud');
        $clinicas->save();

        $idmax = \DB::table('clinicas')->max('id');

        $clinica = Clinica::find($idmax);

        $toView = array(
            "iduser" => $clinica->iduser,
            "id" => $clinica->id,
            "descripcion" => $clinica->nombres,
            "direccion" => $clinica->apellidos,
            "latitud" => $clinica->email,
            "longitud" => $clinica->clinicaname,
        );

        return \Response::json(array(
                "Result" => "OK",
                "Record" => $toView
            )
        );
    }

    public function eliminar()
    {
        $clinica = Clinica::find(\Input::get('id'));
        if ($clinica->delete()) {
            return \Response::json(array(
                "Result" => 'OK'
            ));
        }
    }
} 