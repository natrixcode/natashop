<?php

namespace app\controllers;

use RedBeanPHP\R;
use app\models\Main;
// use wfm\Controller;

class MainController extends AppController
{

    public function indexAction() 
    {


        $slides = R::findAll('slider');

        $products = $this->model->get_hits(1, 4);

        $this->set(compact('slides', 'products'));
        $this->setMeta("Main page", 'description', 'keywords');
    }
}

?>