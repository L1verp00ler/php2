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
        $article->save();

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

    public function actionUpdateNews()
    {
        $id = $_GET['id'];

        /**
         * @var News $one_news
         */
        $one_news = News::findOneByPk($id);
        //var_dump($one_news);

        $date = $_POST['date'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        //$one_news->date = $date;
        //$one_news->title = $title;
        //$one_news->description = $description;
        $one_news->title = 'Новый заголовок!!!';
        $one_news->description = 'Новое описание!!!';
        //var_dump($one_news);
        //die();
        $one_news->save();

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

    public function actionDeleteNews()
    {
        $id = $_GET['id'];

        /**
         * @var News $one_news
         */
        $one_news = News::findOneByPk($id);
        $one_news->delete($id); // здесь думаю можно передавать свойство уже найденного объекта ->id
        // либо вообще в этот метод ничего не передавать, а вытаскивать это свойство уже в самом методе!

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
        $value = $_GET[$column]; // получили значение столбца, по которому будем осуществлять поиск

        $news_list = News::findByColumn($column, $value);
        $view = new View();
        $view->items = $news_list;
        $view->display('/news/all.php');
    }
}