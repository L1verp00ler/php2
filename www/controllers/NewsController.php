<?php

class NewsController
{
    public function actionAll()
    {
        $db = new DB();
        $res = $db->query(
            'SELECT * FROM news WHERE id=:id',
            [':id' => 2]
        );
        var_dump($res);
        die();

        $news_list = News::getAll();
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
        $one_news = News::getOne($id);
        $view = new View();
        $view->item = $one_news;
        $view->display('/news/one.php');
    }
}