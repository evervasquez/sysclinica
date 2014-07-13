<?php
/**
 * Created by PhpStorm.
 * clinica: ever
 * Date: 01/06/14
 * Time: 03:28 PM
 */

namespace sysclinica\Repositorios;


use sysclinica\Entidades\Clinica;
use sysclinica\Entidades\User;

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

    public function editar($data)
    {
        $clinica = clinica::find($data['idclinica']);
        $clinica->iduser = \Auth::user()->id;
        $clinica->idtipo = $data['tipo'];
        $clinica->descripcion = $data['descripcion'];
        $clinica->direccion = $data['direccion'];
        $clinica->latitud = $data['latitud'];
        $clinica->longitud = $data['longitud'];
        $clinica->razon_social = $data['razon_social'];
        $clinica->ciudad = $data['ciudad'];
        $clinica->web = $data['web'];
        $clinica->telefono = $data['telefono'];
        $clinica->email = $data['email'];
        $clinica->resumen = $data['resumen'];
        $clinica->facebook = $data['facebook'];
        $clinica->twitter = $data['twitter'];
        $clinica->distrito = $data['distrito'];

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

    public function nuevaClinica($data)
    {
        $ususario = \Session::get('iduser');

        $clinicas = new clinica();
        $clinicas->iduser = $ususario[0];
        $clinicas->idtipo = $data['tipo'];
        $clinicas->descripcion = $data['descripcion'];
        $clinicas->direccion = $data['direccion'];
        $clinicas->latitud = $data['latitud'];
        $clinicas->longitud = $data['longitud'];
        $clinicas->save();

        $user = User::withTrashed()->find($ususario[0]);
        $user->restore();
        $user->save();
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

    public function find($usuario)
    {
        return Clinica::where('iduser','=',$usuario)
            ->get();
    }

    public function newClinica()
    {
        return new Clinica();
    }

    public function getClinicasMaps()
    {
        $sql = 'SELECT clinicas.descripcion, clinicas.direccion, clinicas.latitud, clinicas.longitud, clinicas.ciudad, clinicas.email,
                clinicas.facebook,clinicas.twitter,clinicas.distrito,clinicas.web,users.apellidos, users.urlimagen,users.nombres,
                tipos.descripcion as tipo, tipos.icono
                FROM clinicas
                INNER JOIN users ON users.id = clinicas.iduser
                INNER JOIN tipos ON clinicas.idtipo=tipos.id';

        return \DB::select($sql);
    }

    public function androidClinicas()
    {

        $response = \DB::table('clinicas')
                    ->join('users','clinicas.iduser','=','users.id')
                    ->join('tipos','clinicas.idtipo','=','tipos.id')
            ->select('clinicas.id','clinicas.descripcion','clinicas.direccion',
                'clinicas.latitud','clinicas.longitud','clinicas.ciudad','clinicas.distrito',
                'clinicas.razon_social','clinicas.telefono','clinicas.resumen','clinicas.facebook',
                'clinicas.twitter','clinicas.web',
                'users.nombres','users.apellidos','tipos.descripcion as tipo','tipos.id as idtipo','tipos.icono')
            ->get();

        return \Response::json(
            array(
                'android' => $response
            )
        );

    }

    public function androidSearchClinicas($cadena)
    {
        $response = \DB::table('clinicas')
            ->join('users','clinicas.iduser','=','users.id')
            ->join('tipos','clinicas.idtipo','=','tipos.id')
            ->where('clinicas.descripcion','LIKE','%'.$cadena.'%')
            ->orWhere('tipos.descripcion','LIKE','%'.$cadena.'%')
            ->whereNull('clinicas.deleted_at')
            ->select('clinicas.id','clinicas.descripcion','clinicas.direccion',
                'clinicas.latitud','clinicas.longitud','clinicas.ciudad','clinicas.distrito',
                'clinicas.razon_social','clinicas.telefono','clinicas.resumen','clinicas.facebook',
                'clinicas.twitter','clinicas.web',
                'users.nombres','users.apellidos','tipos.descripcion as tipo','tipos.id as idtipo','tipos.icono')
            ->get();

        return \Response::json(
            array(
                'android' => $response
            )
        );
    }
} 