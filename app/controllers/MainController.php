<?php

namespace app\controllers;

use wfm\App;
use RedBeanPHP\R;
use app\models\Main;
// use wfm\Controller;

class MainController extends AppController
{

    public function indexAction() 
    {

        $lang = App::$app->getProperty('language');
        $slides = R::findAll('slider');

        $products = $this->model->get_hits($lang, 4);

        $this->set(compact('slides', 'products'));
        $this->setMeta("Main page", 'description', 'keywords');
    }
}

?>