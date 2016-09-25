<?php

class AdminController
{
    public function actionAddNewsForm()
    {
        $view = new View();
        $view->data('news');
        $view->display('add_news_form.php');
    }

    public function actionAddNews()
    {
        $date = $_POST['date'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $news = new News;
        $add_news = $news->addNews($date, $title, $description);

        if ($add_news) {
            $error = 'false';
        } else {
            $error = 'true';
        }

        $view = new View();
        $view->data('news');
        $view->display('add_news.php');
    }
}