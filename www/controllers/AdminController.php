<?php

class AdminController
{
    public function actionAddNewsForm()
    {
        include_once __DIR__ . '/../views/add_news_form.php';
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

        include_once __DIR__ . '/../views/add_news.php';
    }
}