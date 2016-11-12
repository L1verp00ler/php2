<?php

//Класс для работы с БД
class DB
{
    /*
    private $host;
    private $login;
    private $password;
    private $db_name;
    private $table_name;
    */
    private $dbh;
    private $className = 'stdClass';

    public function setClassName($className)
    {
        $this->className = $className;
    }

    //Конструктор, в котором выполняется попытка подключения к БД
    public function __construct()
    {
        require_once __DIR__ . '/config.php';

        // Подключение к БД
        $dsn = 'mysql:dbname=' . $config['db']['db_name'] . ';host=' . $config['db']['db_host']; // строка подключения к БД
        $this->dbh = new PDO($dsn, $config['db']['db_user'], $config['db']['db_password']); // dbh - database handler, объект связи с БД
    }

    public function query($sql, $params=[])
    {
        // Подготовка запроса
        $sth = $this->dbh->prepare($sql); // sth - statement handler
        // Выполнение запроса с подстановкой
        $sth->execute($params);
        // Получение результата запроса (все строки)
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function execute($sql, $params=[])
    {
        // Подготовка запроса
        $sth = $this->dbh->prepare($sql); // sth - statement handler
        // Выполнение запроса с подстановкой
        return $sth->execute($params);
    }

    /*
    //Метод для выборки данных из БД
    public function queryAll($sql, $class = 'stdClass')
    {
        $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }
        $result = [];
        while ($row = mysql_fetch_object($res, $class)){
            $result[] = $row;
        }
        return $result;
    }

    public function queryOne($sql, $class = 'stdClass')
    {
        return $this->queryAll($sql, $class)[0];
    }

    //Метод для выполнения запросов, не возвращающих данные (INSERT, UPDATE, DELETE)
    public function sqlExec($sql)
    {
        $result = mysql_query($sql);
        return $result;
    }
    */

    /*
    public function get_all_items($table_name)
    {
        $this->table_name = $table_name;
        $sql = 'SELECT * FROM ' . $this->table_name;
        //var_dump($sql);
        $res = mysql_query($sql);
        $result = [];
        while ($row = mysql_fetch_assoc($res)){
            $result[] = $row;
        }
        return $result;
    }

    public function get_item_by_id($table_name, $id)
    {
        $this->table_name = $table_name;
        $sql = 'SELECT * FROM ' . $this->table_name . ' WHERE id=' . $id;
        var_dump($sql);
        $res = mysql_query($sql);
        var_dump($res);
        $result = [];
        while ($row = mysql_fetch_assoc($res)){
            $result[] = $row;
        }
        var_dump($result);
        return $result;
    }

    public function add_new_item($table_name, $rows, $values)
    {
        $this->table_name = $table_name;
        $sql = 'INSERT INTO ' . $this->table_name . " (date, title, description) VALUES (" . $values . ");";
        //var_dump($sql);
        $result = mysql_query($sql);
        return $result;
    }

    public function update_item($table_name, $date, $title, $description, $id)
    {
        $this->table_name = $table_name;
        //$sql = 'UPDATE ' . $this->table_name . ' SET ' . avtomat='".$avtomat."',pistolet='".$pistolet."' WHERE id_sotr =".$_GET['id'];
        $sql = "UPDATE " . $this->table_name . " SET date='" . $date . "', title='" . $title . "', description='" . $description . "' WHERE id=" . $id;
        var_dump($sql);
        $result = mysql_query($sql);
        return $result;
    }
    */
}