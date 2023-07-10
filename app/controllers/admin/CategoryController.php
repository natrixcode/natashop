<?php


namespace app\controllers\admin;

use app\models\admin\Category;
use RedBeanPHP\R;

/** @property Category $model */

class CategoryController extends AppController
{

    public function indexAction()
    {
        $title = 'Категорії';
        $this->setMeta("Адмінка :: {$title}");
        $this->set(compact('title'));
    }

    public function deleteAction()
    {
        $id = get('id');
        $errors = '';
        $children = R::count('category', 'parent_id = ?', [$id]);
        $products = R::count('product', 'category_id = ?', [$id]);
        if ($children) {
            $errors .= 'Помилка! В категорії є вкладені категорії<br>';
        }
        if ($products) {
            $errors .= 'Помилка! В категорії є товари<br>';
        }
        if ($errors) {
            $_SESSION['errors'] = $errors;
        } else {
            R::exec("DELETE FROM category WHERE id = ?", [$id]);
            R::exec("DELETE FROM category_description WHERE category_id = ?", [$id]);
            $_SESSION['success'] = 'Категорія видалена';
        }
        redirect();
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            if ($this->model->category_validate()) {
                if ($this->model->save_category()) {
                    $_SESSION['success'] = 'Категорія збережена';
                } else {
                    $_SESSION['errors'] = 'Помилка!';
                }
            }
            redirect();
        }
        $title = 'Додавання категорії';
        $this->setMeta("Адмінка :: {$title}");
        $this->set(compact('title'));
    }

}