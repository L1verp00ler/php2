<?php

abstract class AbstractModel
    implements IModel
{
    protected static $table;

    //Получение списка всех записей из таблицы
    public static function findAll()
    {
        //$sql = 'SELECT * FROM ' . static::$table . ' ORDER BY date DESC';

        $class = get_called_class(); // Получим имя класса, который будет реально вызывать этот метод
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    //Получение конкретной записи из таблицы
    public static function findOneByPk($id)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql, [':id' => $id]);
    }

    /*
    // в данный метод можно будет передать только класс, который реализует интерфейс IModel
    // такая штуковина называется class hinting (более продвинутый type hinting)
    public function foo(IModel $model){}
    */
}