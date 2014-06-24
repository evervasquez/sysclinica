<?php

namespace sysclinica\Validadores;


abstract class BaseManagers
{

    protected $entity;
    protected $data;
    protected $errors;

    public function __construct($entidad, $datos)
    {
        $this->entity = $entidad;
        $this->data = array_only($datos, array_keys($this->getRules()));
    }

    abstract public function getRules();

    public function isValid()
    {
        //recuperamos todas las reglas
        $rules = $this->getRules();

        $validation = \Validator::make($this->data, $rules);

        //true si pasa
        $isValid = $validation->passes();

        //mensajes de error
        $this->errors = $validation->messages();

        return $isValid;
    }

    //metodo para guardar
    //no se usa en este proyecto ; metodo fill
    public function save()
    {
        if (!$this->isValid()) {
            return false;
        }

        $this->entity->fill($this->data);
        $this->entity->save();

        return true;
    }

    //retornamos los errors
    public function getErros()
    {
        return $this->errors;
    }
} 