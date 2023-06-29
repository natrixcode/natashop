<?php


namespace app\controllers\admin;


class MainController extends AppController
{

    public function indexAction()
    {
        $title = 'Home page';
        $this->setMeta('Admin | Home page');
        $this->set(compact('title'));
    }

}