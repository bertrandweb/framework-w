<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\login;


class UsersController extends Controller
{
    public function home()
    {
        $this->show('user/home');
    }
    public function login()
    {
        $login = new LoginModel();
        $login -> login();

        $this->show('user/login');
    }

    public function valide()
    {
        $this -> show('user/login');
    }

    public function insertion()
    {
        $this -> show('article/insertion');
    }
}

