<?php
namespace sysclinica\Entidades;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

    protected $softDelete = true;

	protected $table = 'users';
    protected $fillable = array('username','email','password');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

    //encriptar password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = \Hash::make($value);
    }

	protected $hidden = array('password','created_at','updated_at','deleted_at');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    public function isAdmin(){

        if(\Auth::user()->idperfil=="1"){
            return true;
        }else{
            return false;
        }

    }

    public function isUser()
    {
        if(\Auth::user()->idperfil=="2"){
            return true;
        }else{
            return false;
        }
    }
}
