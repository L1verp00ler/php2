<?php

require_once __DIR__ . '/../core/DB.php';
require_once __DIR__ . '/../core/Article.php';

//Класс новостей
class NewsModel extends Article
{
    private $id;
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
    public function getAllNews()
    {
        //$db = new DBClass();
        //$result = $db->get_all_items(NewsClass::TABLE_NAME);
        $db = new DB();
        $sql = 'SELECT * FROM news ORDER BY date DESC';
        //$result = $db->get_all_items($sql);
        $result = $db->sqlSelect($sql);
        return $result;
    }

    //Получение конкретной новости
    public function getOneNews($id)
    {
        //$db = new DBClass();
        //$result = $db->get_item_by_id(NewsClass::TABLE_NAME, $id);
        $db = new DB();
        $sql = 'SELECT * FROM news WHERE id=' . $id;
        //$result = $db->get_item_by_id($sql);
        $result = $db->sqlSelect($sql);
        //var_dump($result);
        return $result;
    }

    //Добавление новости
    public function addNews($date, $title, $description)
    {
        //$values = "'" . $date . "','" . $title . "','" . $description . "'";
        //var_dump($values);
        //exit();

        //$db = new DBClass();
        //$result = $db->add_new_item(NewsClass::TABLE_NAME, 'date, title, description', $values);
        $db = new DB();
        $sql = "INSERT INTO news (date, title, description) VALUES ('" . $date . "','" . $title . "','" . $description . "')";
        //$result = $db->add_new_item($sql);
        $result = $db->sqlExec($sql);
        return $result;
    }

}

/*
$news = new NewsClass();
$result = $news->getAllNews();
var_dump($result);
*/