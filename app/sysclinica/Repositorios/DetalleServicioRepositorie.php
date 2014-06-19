<?php
/**
 * Created by PhpStorm.
 * User: ever
 * Date: 17/06/14
 * Time: 12:36 AM
 */

namespace sysclinica\Repositorios;


use sysclinica\Entidades\DetalleServicio;

class DetalleServicioRepositorie {

    public function getServiciosClinica()
    {

    }

    public function createDetalleServicio($data)
    {
        for($i=0; $i < count($data['servicios']); $i++)
        {
            $detalle = new DetalleServicio();
            $detalle->idclinica = $data['idclinicaServicio'];
            $detalle->idservicio = $data['servicios'][$i];
            $detalle->save();
        }

        return true;
    }
} 