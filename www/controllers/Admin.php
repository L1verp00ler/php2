<?php

namespace App\Controllers;

use App\Core\E404Exception;
use App\Core\View;
use App\Models\News;

class Admin
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
        $one_news->delete();

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

    public function actionLog()
    {
        $path = __DIR__ . '/../errors.txt';
        if (!file_exists($path)) {
            throw new E404Exception('Файл с логами не найден!', 404);
        }

        $errors_list = file_get_contents($path); // считываю содержимое файла с логами в одну строку
        $errors_array = explode(";", $errors_list); // преобразовываю в массив
        array_pop($errors_array); // удаляю последний элемент (в нём пустая строка) // костылек???
        //echo '<br><br>';
        //$errors = file($path);
        //var_dump($errors);
        $view = new View();
        $view->log = $errors_array;
        $view->display('/log.php');
    }
}