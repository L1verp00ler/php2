<?php

namespace App\Controllers;

use App\Core\E404Exception;
use App\Core\View;
use App\Models\News as NewsModel;

class News
{
    public function actionAll()
    {
        $news_list = NewsModel::findAll();
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
        $one_news = NewsModel::findOneByPk($id);
        if (!$one_news) {
            throw new E404Exception('Новость не найдена!', 404);
        }
        $view = new View();
        $view->item = $one_news;
        $view->display('/news/one.php');
    }
}