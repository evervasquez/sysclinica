<?php
use sysclinica\Repositorios\UserRepositorio;
use sysclinica\Entidades\User;
use sysclinica\Entidades\Tipo;

class UsersController extends \BaseController
{
    protected $userRepo;

    public function __construct(UserRepositorio $userRepositorio)
    {
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
            return Redirect::to('/')
                ->with('error','datos incorrectos.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/')
            ->with('error', 'Tu sesión ha sido cerrada.');
    }

    public function index()
    {
        return View::make('users/index');
    }

    public function listar()
    {
        $data = Input::all();
        return $this->userRepo->listar($data);
    }

    public function editar()
    {
        $data = Input::all();
        return $this->userRepo->editar($data);
    }

    public function nuevo()
    {
        return $this->userRepo->nuevo();
    }

    public function eliminar()
    {
        return $this->userRepo->eliminar();
    }


    public function register()
    {
        Session::clear();
        $data = Input::all();

        $rules = [
            'username' => 'required|unique:users,username|min:3',
            //regla unique con parametros
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'

        ];

        $validation = Validator::make($data, $rules);

        if ($validation->passes()) {
            $user = $this->userRepo->nuevoUser($data);
            Session::push('iduser', $user->id);
            return \Redirect::route('paso2');
        } else {

            return \Redirect::back()->withInput()->withErrors($validation->messages());
        }
    }

    public function singUp()
    {
        return View::make('sign-up');
    }

    public function addClinica()
    {
        $tipos = Tipo::whereNull('deleted_at')->get();
        return View::make('add-clinica')->with('datos',$tipos);
    }

    public function profile()
    {
        $idusuario = \Auth::user()->id;
        $profile = $this->userRepo->show($idusuario);

        return View::make('users/profile')->with('datos',$profile);
    }

    public function getPerfil()
    {
        $idusuario = \Auth::user()->id;

        return $this->userRepo->show($idusuario);

    }

    public function updateProfile()
    {
        $data = Input::all();
        $rules = [

            'nombres' => 'required|min:2',
            'apellidos' => 'required|min:2',
            'email' => 'required|email',

        ];

        $validation = Validator::make($data, $rules);

        if ($validation->passes()) {
            $this->userRepo->editar($data);
            return Redirect::route('profile')
                ->with('global','Tu cuenta ha sido actualizada.');
        } else {
            return \Redirect::back()->withInput()->withErrors($validation->messages());
        }
    }

    public function changePassword()
    {
        $data = Input::all();
        $rules = [

            'old_password' => 'required',
            'password' => 'required|min:6',
            'password_again' => 'required|same:password',

        ];

        $validation = Validator::make($data, $rules);

        if ($validation->passes()) {

            if($this->userRepo->changePassword($data))
            {
                return Redirect::route('profile')
                    ->with('global','Tu contraseña ha sido cambiada.');
            }else{
                return Redirect::route('profile')
                    ->with('error','Tu contraseña antigua no es correcta.');
            }

        } else {
            return \Redirect::back()->withInput()->withErrors($validation->messages());
        }
    }

    public function uploadImagen()
    {
        $data = Input::all();
        $file = Input::file('imagen');
        $rules = [
            'imagen' => 'required',
        ];

        $validation = Validator::make($data, $rules);

        if ($validation->passes()) {

            if($this->userRepo->updateImagen($file))
            {
                $destinationPath = public_path().sprintf("/assets/img/", str_random(8));
                $file->move($destinationPath,$file->getClientOriginalName());
                return Redirect::route('profile')
                    ->with('global','Tu imagen de perfil ha sido cambiada.');
            }else{
                return Redirect::route('profile')
                    ->with('error','Hubo un error al subir tu imagen.');
            }

        } else {
            return \Redirect::back()->withInput()->withErrors($validation->messages());
        }
    }
}