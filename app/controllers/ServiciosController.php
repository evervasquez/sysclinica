<?php
use sysclinica\Repositorios\ServicioRepositorie;

class ServiciosController extends \BaseController {
    protected $servicioRepo;

    public function __construct(ServicioRepositorie $servicioRepositorie)
    {
        $this->servicioRepo = $servicioRepositorie;
    }

    public function getServicios()
    {
        return $this->servicioRepo->getServicios();
    }

    public function create()
    {
        $data = Input::all();

    }
}