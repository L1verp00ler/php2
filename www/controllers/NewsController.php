<?php

require_once __DIR__ . '/../models/News.php';

class NewsController
{
    public function actionAll()
    {
        $news_list = News::getAll();
        require_once __DIR__ . '/../views/news/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $one_news = News::getOne($id);
        require_once __DIR__ . '/../views/news/one.php';
    }
}