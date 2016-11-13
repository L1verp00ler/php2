<?php

class AdminController
{
    public function actionAddNewsForm()
    {
        $view = new View();
        $view->display('/news/add_news_form.php');
    }

    public function actionAddNews()
    {
        $date = $_POST['date'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $article = new News;
        $article->date = $date;
        $article->title = $title;
        $article->description = $description;
        $article->insert();

        /*
        $news = new News;
        $add_news = $news->addNews($date, $title, $description);

        if ($add_news) {
            $error = 'false';
        } else {
            $error = 'true';
        }
        */

        $view = new View();
        $view->display('/news/add_news.php');
    }

    public function actionSearchByValue()
    {
        //$column = key($_GET); // возвращает ключ того элемента массива, на который в данный момент указывает внутренний указатель массива
        $column = array_keys($_GET)[0]; // выбираем первый элемент из массива, содержащего ключи массива $_GET
        $value = $_GET[$column];

        $news_list = News::findByColumn($column, $value);
        $view = new View();
        $view->items = $news_list;
        $view->display('/news/all.php');
    }
}