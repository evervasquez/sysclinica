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

    public function addClinica()
    {
        $data = Input::all();

        $rules = [
            'descripcion' => 'required',
            'direccion' => 'required',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric'

        ];

        $validation = Validator::make($data, $rules);

        if ($validation->passes()) {

            $this->clinicaRepo->newclinica($data);

            return \Redirect::to('/')
                ->with('global', 'Felicitaciones, ya puedes iniciar sessión.');

        }else{

            return \Redirect::back()->withInput()->withErrors($validation->messages());
        }
    }

    public function show()
    {
        $usuario = \Auth::user()->id;


        $clinica = $this->clinicaRepo->find($usuario);


        return View::make('clinicas/show')->with('clinicas',$clinica);
    }

    public function find()
    {
        $usuario = \Auth::user()->id;
        return  $this->clinicaRepo->find($usuario);
    }

    public function updateClinica()
    {
        $data = Input::all();
        $rules = [
            'descripcion' => 'required|min:6',
            'razon_social' => 'required|min:6',
            'email' => 'email',
            'telefono' => 'numeric',
        ];

        $validation = Validator::make($data, $rules);

        if ($validation->passes()) {
            $this->clinicaRepo->editar($data);
            return Redirect::route('clinica')
                ->with('global','La clinica ha sido actualizada.');
        } else {
            return \Redirect::back()->withInput()->withErrors($validation->messages());
        }
    }
}