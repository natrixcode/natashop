<?php

namespace app\controllers;

use RedBeanPHP\R;
use app\models\Main;
use wfm\Controller;

class MainController extends Controller
{

    public function indexAction() 
    {
        $names = $this->model->get_names();

        $getnames = R::getRow( 'SELECT * FROM name WHERE id = 2');

        $this->setMeta('Main page', 'Description', 'Keywords');

        $this->set(compact('names')); //more comfortable to use

        // we can change to another layout (only existing one, ex : /layouts/default.php)
        // based on the title of layout
        // it will automaticaly connect us to layout which we set in configuration (natashop.php)
    }
}

?>