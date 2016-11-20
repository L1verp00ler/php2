<?php

/**
 * Class AbstractModel
 * @property $id
 * @property $date
 * @property $title
 * @property $description
 */
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
        // $db->query('SET NAMES utf8'); - используется, если в базе есть что-то в другой кодировке
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
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=:value';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql, [':value' => $value]);
    }

    public function save()
    {
        $id = $this->id; // используем вместо $id = $this->data['id'], ведь получится то же самое, так как
        // сработает геттер __get($name)
        //die();
        if ($id){
            $this->update();
            //self::update($this->data['id']);
        } else {
            $this->insert();
            //self::insert(); // изначально сделал так и возникал вопрос, сработает ли self::insert,
            // но, видимо, все работает (хотя не до конца понятно, почему)
        }
    }

    // Добавление новой записи в таблицу
    protected function insert()
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
    protected function update()
    {
        $data = [];
        foreach ($this->data as $column => $value){
            $columns_set[] = $column . '=:' . $column;
            $data[':' . $column] = $value;
        }

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
    public function delete()
    {
        $sql = '
          DELETE FROM ' . static::$table . '
          WHERE id=:id
        ';

        var_dump($sql);
        //die();

        $db = new DB();
        $db->execute($sql, [':id' => $this->id]);
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