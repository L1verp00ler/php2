<?php

class NewsController
{
    public function actionAll()
    {
        $news_list = News::getAll();
        $view = new View();
        $view->data('news', $news_list);
        $view->display('all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $one_news = News::getOne($id);
        $view = new View();
        $view->data('news', $one_news);
        $view->display('one.php');
    }
}