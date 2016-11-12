<?php

class NewsController
{
    public function actionAll()
    {
        $article = new News;
        $article->title = 'Привет 3!';
        $article->description = 'Привет, мир 3!';
        $article->insert();
        die();

        $news_list = News::findAll();
        $view = new View();
        $view->items = $news_list;
        //$view->foo = 'bar';
        //echo count($view);
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