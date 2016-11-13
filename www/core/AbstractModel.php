<?php

abstract class AbstractModel
    implements IModel
{
    protected static $table;

    protected $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

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
        return $db->query($sql, [':id' => $id])[0];
    }

    // Добавление новой записи в таблицу
    public function insert()
    {
        $cols = array_keys($this->data);
        $data = [];
        foreach ($cols as $col){
            $data[':' . $col] = $this->data[$col];
        }

        $sql = '
          INSERT INTO ' . static::$table . '
           (' . implode(',', $cols) . ')
          VALUES (' . implode(',', array_keys($data)) . ')
        ';

        $db = new DB();
        $db->execute($sql, $data);
    }

    // Заготовка метода для присвоения свойствам объекта нужных значений с формы
    public function fill($data = [])
    {

    }

    // Заготовка метода для выборки данных по значению какого-то поля таблицы
    public static function findByFieldValue()
    {

    }

    /*
    // в данный метод можно будет передать только класс, который реализует интерфейс IModel
    // такая штуковина называется class hinting (более продвинутый type hinting)
    public function foo(IModel $model){}
    */
}