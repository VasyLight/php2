<?php

namespace App\Controllers;

use App\Models\Article;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new \App\View();
    }


    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    public function beforeAction()
    {
        echo 'before Action';
    }

    protected function actionIndex()
    {
        $this->view->title = 'Приложение новостей';
        $this->view->header = 'Новости';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/news.php');
    }

    protected function actionArticle()
    {
        $id = (int)$_GET['id'];
        $this->view->article = Article::findById($id);
        $this->view->display(__DIR__ . '/../templates/article.php');
    }
}