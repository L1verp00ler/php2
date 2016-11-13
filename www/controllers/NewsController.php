<?php

class NewsController
{
    public function actionAll()
    {
        $news_list = News::findAll();
        $view = new View();
        $view->items = $news_list;
        //$view->foo = 'bar';
        //echo count($view); - пример использования реализованного интерфейса Countable
        //die();
        $view->display('/news/all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $one_news = News::findOneByPk($id);
        $view = new View();
        $view->item = $one_news;
        $view->display('/news/one.php');
    }
}