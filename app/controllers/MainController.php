<?php

namespace app\controllers;

use wfm\Controller;

class MainController extends Controller
{

    public function indexAction() 
    {
        // $this->view = 'test';
        // var_dump($this->model);
        echo __METHOD__;
        // $this->set(compact('test', 'test2'));
    }
}

?>