<?php


namespace app\controllers\admin;


class CategoryController extends AppController
{

    public function indexAction()
    {
        $title = 'Категорії';
        $this->setMeta("Адмінка :: {$title}");
        $this->set(compact('title'));
    }

}