<?php

abstract class AbstractModel
{
    //protected static $table;
    //protected static $class;

    //Получение списка всех новостей (отсортированных по дате в обратном порядке)
    public static function getAll()
    {
        $db = new DB();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY date DESC';
        $result = $db->queryAll($sql, static::$class);
        return $result;
    }

    //Получение конкретной новости
    public static function getOne($id)
    {
        $db = new DB();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=' . $id;
        $result = $db->queryOne($sql, static::$class);
        return $result;
    }
}