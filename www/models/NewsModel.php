<?php

require_once __DIR__ . '/../core/DB.php';
require_once __DIR__ . '/../core/Article.php';

//Класс новостей
class NewsModel extends Article
{
    public $id;
    public $date;
    public $title;
    public $description;

    //const TABLE_NAME = 'news';

    /*
    public function __construct($date, $title, $description)
    {
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
    }
    */

    //Получение списка всех новостей (отсортированных по дате в обратном порядке)
    public static function getAllNews()
    {
        $db = new DB();
        $sql = 'SELECT * FROM news ORDER BY date DESC';
        $result = $db->sqlSelect($sql, 'NewsModel');
        return $result;
    }

    //Получение конкретной новости
    public static function getOneNews($id)
    {
        $db = new DB();
        $sql = 'SELECT * FROM news WHERE id=' . $id;
        $result = $db->sqlSelect($sql, 'NewsModel');
        return $result;
    }

    //Добавление новости
    public function addNews($date, $title, $description)
    {
        $db = new DB();
        $sql = "INSERT INTO news (date, title, description) VALUES ('" . $date . "','" . $title . "','" . $description . "')";
        $result = $db->sqlExec($sql);
        return $result;
    }

}

/*
$news = new NewsClass();
$result = $news->getAllNews();
var_dump($result);
*/