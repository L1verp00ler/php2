<?php

class NewsController
{
    public function actionAll()
    {
        $news_list = News::getAll();
        include __DIR__ . '/../views/news/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $one_news = News::getOne($id);
        include __DIR__ . '/../views/news/one.php';
    }
}