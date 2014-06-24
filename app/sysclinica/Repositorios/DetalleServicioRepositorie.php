<?php
/**
 * Created by PhpStorm.
 * User: ever
 * Date: 17/06/14
 * Time: 12:36 AM
 */

namespace sysclinica\Repositorios;


use sysclinica\Entidades\DetalleServicio;

class DetalleServicioRepositorie
{


    public function createDetalleServicio($data)
    {
        for ($i = 0; $i < count($data['servicios']); $i++) {
            $detalle = new DetalleServicio();
            $detalle->idclinica = $data['idclinicaServicio'];
            $detalle->idservicio = $data['servicios'][$i];
            $detalle->save();
        }

        return true;
    }

    public function removeDetalleServicio($id)
    {
        if (DetalleServicio::find($id)->delete()) {
            return \Response::json(array(
                "validation" => 1
            ));
        }else{
            return \Response::json(array(
                "validation" => 0
            ));
        }
    }

} 