<?php

namespace app\controllers;

use wfm\App;
use RedBeanPHP\R;
use app\models\Main;
use wfm\Cache;

class MainController extends AppController
{

    public function indexAction() 
    {
        // $test = "Hi:)";
        // $cache = Cache::getInstance();
        // $cache->set('test', $test, 30);

        // var_dump($cache->get('test'));
        // var_dump($test);

        $lang = App::$app->getProperty('language');
        $slides = R::findAll('slider');

        $products = $this->model->get_hits($lang, 4);

        $this->set(compact('slides', 'products'));
        $this->setMeta(___('main_index_meta_title'), ___('main_index_meta_description'), ___('main_index_meta_keywords'));
    }
}

?>