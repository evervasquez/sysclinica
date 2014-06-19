<?php
use sysclinica\Repositorios\DetalleServicioRepositorie;

class DetalleServiciosController extends \BaseController
{
    protected $detalleRepo;

    public function __construct(DetalleServicioRepositorie $detalleServicioRepositorie)
    {
        $this->detalleRepo = $detalleServicioRepositorie;
    }

    public function create()
    {
        $data = Input::all();

        if ($this->detalleRepo->createDetalleServicio($data)) {
            return \Redirect::route('clinica')
                ->with('global', 'Los servicios de la clinica han sido actualizados.');
        }

    }
}