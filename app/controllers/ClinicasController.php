<?php

use sysclinica\Repositorios\ClinicaRepositorio;

class ClinicasController extends \BaseController {
    protected $clinicaRepo;
    public $restful = true;

    public function __construct(ClinicaRepositorio $clinicaRepositorio){
        $this->clinicaRepo = $clinicaRepositorio;
    }

	public function index()
	{
        return View::make('clinicas/index');
	}

    public function listar()
    {
        return $this->clinicaRepo->listar();
    }

    public function editar()
    {
        return $this->clinicaRepo->editar();
    }

    public function nuevo()
    {
        return $this->clinicaRepo->nuevo();
    }

    public function eliminar()
    {
        return $this->clinicaRepo->eliminar();
    }

}