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

    // Выборка данных по значению какого-либо поля таблицы
    public static function findByColumn($column, $value)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=:' . $column;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql, [":$column" => $value]);
    }

    // Добавление новой записи в таблицу
    public function insert()
    {
        $columns = array_keys($this->data);
        $data = [];
        foreach ($columns as $column){
            $data[':' . $column] = $this->data[$column];
        }

        $sql = '
          INSERT INTO ' . static::$table . '
           (' . implode(',', $columns) . ')
          VALUES (' . implode(',', array_keys($data)) . ')
        ';

        $db = new DB();
        $db->execute($sql, $data);
    }

    // Обновление существующей записи в таблице
    public function update($id)
    {
        array_shift($this->data);
        $columns = array_keys($this->data);
        $data = [];
        foreach ($columns as $column){
            $columns_set[] = $column . '=:' . $column;
            $data[':' . $column] = $this->data[$column];
        }
        //$data[':nid'] = $id;
        $data[':id'] = $id;

        var_dump($columns_set);
        var_dump(implode(', ', $columns_set));

        //$sql = "UPDATE " . $this->table_name . " SET date='" . $date . "', title='" . $title . "', description='" . $description . "' WHERE id=" . $id;

        // $sql = 'UPDATE news SET date='29-02-2016', title='Заголовок', description='Описание'';

        // $sql = 'UPDATE news SET date=:date, title=:title, description=:description';
        // $data = [':date' => '29-02-2016', ':title' => 'Заголовок', ':description' => 'Описание'];

        $sql = '
          UPDATE ' . static::$table . '
          SET ' . implode(', ', $columns_set) . '
          WHERE id=:id
        ';
        var_dump($sql);
        var_dump($data);
        //die();

        $db = new DB();
        $db->execute($sql, $data);
    }

    // Удаление конкретной записи из таблицы
    public function delete($id)
    {
        $sql = '
          DELETE FROM ' . static::$table . '
          WHERE id=:id
        ';

        var_dump($sql);
        //die();

        $db = new DB();
        $db->execute($sql, [':id' => $id]);
    }

    // Заготовка метода для присвоения свойствам объекта нужных значений с формы
    public function fill($data = [])
    {
        #
    }

    /*
    // в данный метод можно будет передать только класс, который реализует интерфейс IModel
    // такая штуковина называется class hinting (более продвинутый type hinting)
    public function foo(IModel $model){}
    */
}