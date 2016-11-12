<?php

//Класс новостей
class News extends AbstractModel
{
    public $id;
    public $date;
    public $title;
    public $description;

    protected static $table = 'news';

    /*
    public function __construct($date, $title, $description)
    {
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
    }
    */

    //Добавление новости
    public function addNews($date, $title, $description)
    {
        $db = new DB();
        $sql = "INSERT INTO news (date, title, description) VALUES ('" . $date . "','" . $title . "','" . $description . "')";
        $result = $db->sqlExec($sql);
        return $result;
    }

}