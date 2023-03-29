<?php

namespace wfm;

abstract class Controller 
{

    public array $data = [];

    public array $meta = ['title' => '' , 'description' => '' , 'keywords' => ''];

    public false|string $layout = '';

    public string $view = '';

    public string $model;

    public function __construct(public $route = [])
    {

    }

    public function getModel() 
    {
        $model = 'app\models\\' . $this->route['admin_prefix'] . $this->route['controller'];
        // $this->model = $model;

        if (class_exists($model)) {
            $this->model = new $model();
        }
    }


    public function getView() 
    {
        $this->view = $this->view ?: $this->route['action'];
    }

    public function set($data) 
    {
        $this->data = $data;
    }

    public function setMeta($title = '', $description = '', $keywords = '') 
    {
        $this->meta = [
            'title' => $title ,
            'description' => $description , 
            'keywords' => $keywords,
        ];
    }
}

?>