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
        //$article->title = 'Привет 4!';
        //$article->description = 'Привет, мир 4!';
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
}