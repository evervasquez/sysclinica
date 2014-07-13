<?php
/**
 * Created by PhpStorm.
 * User: ever
 * Date: 01/06/14
 * Time: 12:19 AM
 */

namespace sysclinica\Validadores;


class UsersManagers extends BaseManagers{

    public function getRules()
    {
        $rules = [
            'username' => 'required|unique:users,username|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'

        ];
        return $rules;
    }

} 