<?php

namespace Controller;

use \W\Controller\Controller;

class ArticleController extends Controller
{
    public function display ()
    {
        $this -> show('article/afficher');
    }
}
