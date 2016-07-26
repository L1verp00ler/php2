<?php

/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 26.07.2016
 * Time: 18:33
 */

require_once __DIR__.'/Article.php';
require_once __DIR__.'/DB.php';

class NewsClass extends Article
{
    private $id;
    public $date;
    public $title;
    public $description;

    const TABLE_NAME = 'news';

    /*
    public function __construct($date, $title, $description)
    {
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
    }
    */

    public function getAllNews()
    {
        $db = new DB();
        $result = $db->get_all_items(NewsClass::TABLE_NAME);
        return $result;
    }

    public function addNews($date, $title, $description)
    {
        $values = "'" . $date . "','" . $title . "','" . $description . "'";
        //var_dump($values);
        //exit();

        $db = new DB();
        $result = $db->add_new_item(NewsClass::TABLE_NAME, 'date, title, description', $values);
        return $result;
    }

    public function getNews($id)
    {
        $db = new DB();
        $result = $db->get_item_by_id(NewsClass::TABLE_NAME, $id);
        var_dump($result);
        return $result;
    }

}

/*
$news = new NewsClass();
$result = $news->getAllNews();
var_dump($result);
*/