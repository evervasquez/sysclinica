<?php

use sysclinica\Repositorios\ModuloRepositorio;

class ModulosController extends \BaseController
{
    protected $moduloRepo;

    public function __construct(ModuloRepositorio $moduloRepositorio)
    {
        $this->moduloRepo = $moduloRepositorio;
    }

    public function getModulos()
    {
        return $this->moduloRepo->getModulos();
    }

    public function index()
    {
        return View::make('modulos/index');
    }

    public function listar()
    {
        return $this->moduloRepo->listar();
    }

    public function editar()
    {
        return $this->moduloRepo->editar();
    }

    public function nuevo()
    {
        return $this->moduloRepo->nuevo();
    }

    public function eliminar()
    {
        return $this->moduloRepo->eliminar();
    }
}