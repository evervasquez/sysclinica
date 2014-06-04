<?php
use sysclinica\Repositorios\UserRepositorio;
class UsersController extends \BaseController {
    protected $userRepo;
    public function __construct(UserRepositorio $userRepositorio){
        $this->userRepo = $userRepositorio;
    }
    public function login()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if (Auth::attempt($userdata)) {

            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/');

        } else {

            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            //Session::flash('message', 'Datos incorrectos!');
            return Redirect::to('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/')
            ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

    public function index(){
        return View::make('users/index');
    }

    public function listar()
    {
        return $this->userRepo->listar();
    }

    public function editar()
    {
        return $this->userRepo->editar();
    }

    public function nuevo()
    {
        return $this->userRepo->nuevo();
    }

    public function eliminar()
    {
        return $this->userRepo->eliminar();
    }
}