<?php

namespace app\controllers;

use wfm\Controller;

class MainController extends Controller
{

    public function indexAction() 
    {
        $names = ['Nata', 'Levi', 'John'];

        $this->setMeta('Main page', 'Description', 'Keywords');

        $this->set(compact('names')); //more comfortable to use

        // $this->set(['names' => $names]);

        // $this->set(['test' => 'TEST', 'name' => 'Nata']);
        // $this->layout = 'default'; 

        // we can change to another layout (only existing one, ex : /layouts/default.php)
        // based on the title of layout
        // it will automaticaly connect us to layout which we set in configuration (natashop.php)
    }
}

?>