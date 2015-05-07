<?php


class Users extends Model {

   public static $table = 'users';

    public $login;
    public $role;
    public $passw;

    public function Auth()
    {
        $res = $this->findUser($this->login)[0];
        var_dump($res);
        foreach ($res as $r) {}
        echo $res->role;
        die;
    }

    public function Authv()
    {


    }

}