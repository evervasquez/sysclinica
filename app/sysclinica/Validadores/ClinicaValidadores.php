<?php
/**
 * Created by PhpStorm.
 * User: ever
 * Date: 21/06/14
 * Time: 11:28 AM
 */

namespace sysclinica\Validadores;


class ClinicaValidadores extends BaseManagers{

    public function getRules()
    {
        $rules = [
            'descripcion' => 'required',
            'direccion' => 'required',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric',
            'tipo'  => 'required|numeric'

        ];
        return $rules;
    }


} 