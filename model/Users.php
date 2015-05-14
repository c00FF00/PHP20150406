<?php

namespace model;

use gclasses\E403Exception;
use gclasses\Model;

class Users extends Model
{

    public static $table = 'users';

    public $login;
    public $role;
    public $passw;

    public static function Check($login, $passw)
    {
        $user = static::findUser($login)[0];
        if ($user->passw == $passw) {
            $_SESSION['role'] = $user->role;
            var_dump($_SESSION);
            return $user->role;
        } else {
            throw new E403Exception();
        }

    }

}