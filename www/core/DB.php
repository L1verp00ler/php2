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

    //Конструктор, в котором выполняется попытка подключения к БД
    public function __construct()
    {
        require_once __DIR__ . '/config.php';
        $connect = mysql_connect($config['db']['db_host'], $config['db']['db_user'], $config['db']['db_password']);
        if ($connect) {
            mysql_selectdb($config['db']['db_name']);
        }
    }

    //Метод для выборки данных из БД
    public function sqlSelect($sql, $class = 'stdClass')
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

    //Метод для выполнения запросов, не возвращающих данные (INSERT, UPDATE, DELETE)
    public function sqlExec($sql)
    {
        $result = mysql_query($sql);
        return $result;
    }

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

/*
$db = new DB('php2.local', 'root', '', 'test');
var_dump($db);
echo '---';
$result = $db->get_all_items('news');
var_dump($result);
echo '<br>';
$result2 = $db->add_new_item('news', 'date, title, description', "'2016-07-27', 'Заголовок 9', 'Описание новости 9'");
var_dump($result2);
echo '<br>';
$result3 = $db->update_item('news', '2016-07-29', 'Заголовок 10', 'Описание новости 10', 22);
var_dump($result3);
*/