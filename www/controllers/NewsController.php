<?php

class NewsController
{
    public function actionAll()
    {
        $news_list = News::getAll();
        $view = new View();
        $view->assign('items', $news_list);
        $view->display('/news/all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $one_news = News::getOne($id);
        $view = new View();
        $view->assign('item', $one_news);
        $view->display('/news/one.php');
    }
}