<?php
use sysclinica\Repositorios\ServicioRepositorie;

class ServiciosController extends \BaseController
{
    protected $servicioRepo;

    public function __construct(ServicioRepositorie $servicioRepositorie)
    {
        $this->servicioRepo = $servicioRepositorie;
    }

    public function getServicios()
    {
        $idclinica = Input::all();

        $rules = [
            'idclinica' => 'numeric|min:1'
        ];

        $validator = Validator::make($idclinica, $rules);

        if ($validator->passes()) {
            $servicios = $this->servicioRepo->getServicios($idclinica);
            return $servicios;
        } else {

        }

    }

    public function create()
    {
        $data = Input::all();

    }
}