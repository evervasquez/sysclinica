<?php

use sysclinica\Repositorios\ClinicaRepositorio;
use sysclinica\Validadores\ClinicaValidadores;

class ClinicasController extends \BaseController
{
    protected $clinicaRepo;
    public $restful = true;

    public function __construct(ClinicaRepositorio $clinicaRepositorio)
    {
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
        $data = Input::all();
        return $this->clinicaRepo->editar($data);
    }

    public function nuevo()
    {
        return $this->clinicaRepo->nuevo();
    }

    public function eliminar()
    {
        return $this->clinicaRepo->eliminar();
    }

    public function addClinica()
    {
        $data = Input::all();

        $entidad = $this->clinicaRepo->newclinica();

        $manager = new ClinicaValidadores($entidad, $data);

        if ($manager->isValid()) {

            $this->clinicaRepo->nuevaClinica($data);

            return \Redirect::to('/')
                ->with('global', 'Felicitaciones, ya puedes iniciar sessión.');

        } else {

            return \Redirect::back()->withInput()->withErrors($manager->getErros());
        }
    }

    public function show()
    {
        $usuario = \Auth::user()->id;

        $clinica = $this->clinicaRepo->find($usuario);

        return View::make('clinicas/show')->with('clinica', $clinica);
    }

    public function find()
    {
        $usuario = \Auth::user()->id;
        return $this->clinicaRepo->find($usuario);
    }

    public function updateClinica()
    {
        $data = Input::all();

        $entidad = $this->clinicaRepo->newclinica();

        $manager = new ClinicaValidadores($entidad, $data);

        if ($manager->isValid()) {

            $this->clinicaRepo->editar($data);
            return Redirect::route('clinica')
                ->with('global', 'La clinica ha sido actualizada.');
        } else {
            return \Redirect::back()->withInput()->withErrors($manager->getErros());
        }
    }

    public function getClinicasMaps()
    {
        return $this->clinicaRepo->getClinicasMaps();
    }

    public function androidClinicas()
    {
        return $this->clinicaRepo->androidClinicas();
    }

    public function searchClinicas()
    {
        $cadena = Input::get('cadena');
        return $this->clinicaRepo->androidSearchClinicas($cadena);
    }
}