<?php
/**
 * Created by PhpStorm.
 * User: ever
 * Date: 01/06/14
 * Time: 01:56 AM
 */

namespace sysclinica\Repositorios;

use sysclinica\Entidades\Modulo;

class ModuloRepositorio
{

    public function getModulos()
    {
        if (\Request::ajax()) {

            $menupadre = Modulo::whereNull('deleted_at')
                ->where('idpadre', '=', 1)
                ->where('id', '<>', 1)
                ->get();

            $cont = 0;
            $menu[] = '';

            $idperfil = \Auth::user()->idperfil;

            foreach ($menupadre as $valor) {
                $idpadre = $valor->id;

                $sql = "SELECT m.descripcion,m.url,m.icono
	 							from modulos m inner join permisos p on m.id=p.idmodulo
								where m.deleted_at IS NULL and p.idperfil='$idperfil' and m.idpadre='$idpadre'";

                $submenu = \DB::select($sql);

                $menu[$cont] = array(
                    'descripcion' => $valor->descripcion,
                    'icono' => $valor->icono,
                    'orden' => $idpadre,
                    'enlaces' => array()
                );
                $cont2 = 0;
                foreach ($submenu as $key) {
                    $menu[$cont]['enlaces'][$cont2] = array(
                        'descripcion' => $key->descripcion,
                        'url' => $key->url,
                        'orden' => $idpadre,
                        'icono' => $key->icono
                    );
                    $cont2++;
                }
                $cont++;
            }
            return $menu;
        }
    }


    public function listar()
    {
        $rows = \DB::table('modulos')->
                where('id','<>','1')
                ->count();

        if (\Input::get('jtSorting')) {

            $search = explode(" ", \Input::get('jtSorting'));
            $data = \DB::table('modulos')
                ->where('id','<>','1')
                ->whereNull('deleted_at')
                ->skip(\Input::get('jtStartIndex'))
                ->take(\Input::get('jtPageSize'))
                ->orderBy($search[0], $search[1])
                ->select()
                ->get();
        } else {
            $data = \DB::table('modulos')
                ->skip(\Input::get('jtStartIndex'))
                ->where('id','<>','1')
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
        $modulo = Modulo::find(\Input::get('id'));
        $modulo->descripcion = \Input::get('descripcion');
        $modulo->icono = \Input::get('icono');
        $modulo->url = \Input::get('url');
        $modulo->idpadre = \Input::get('idpadre');
        if ($modulo->save()) {
            return \Response::json(array(
                "Result" => 'OK'
            ));
        }
    }

    public function nuevo()
    {
        $modulos = new Modulo();
        $modulos->descripcion = \Input::get('descripcion');
        $modulos->icono = \Input::get('icono');
        $modulos->url = \Input::get('url');
        $modulos->idpadre = \Input::get('idpadre');
        $modulos->save();
        $idmax = \DB::table('modulos')->max('id');

        $modulo = Modulo::find($idmax);

        $toView = array(
            "id" => $modulo->id,
            "1" => $modulo->descripcion,
            "descripcion" => $modulo->descripcion,
            "2" => $modulo->url,
            "url" => $modulo->url,
            "3" => $modulo->icono,
            "icono" => $modulo->icono,
            "4" => $modulo->idpadre,
            "idpadre" => $modulo->idpadre,
        );

        return \Response::json(array(
                "Result" => "OK",
                "Record" => $toView
            )
        );
    }

    public function eliminar()
    {
        $modulo = Modulo::find(\Input::get('id'));
        if ($modulo->delete()) {
            return \Response::json(array(
                "Result" => 'OK'
            ));
        }
    }
} 