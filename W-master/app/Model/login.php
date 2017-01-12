<?php


namespace Model;
use W\Model\UsersModel;


class LoginModel extends UsersModel
{
    public $email;
    public function login()
    {
        if ($this -> getUserByUsernameOrEmail('Dhane')) {
            return true;
        }
        else {
            session_unset();
        }
    }
}

