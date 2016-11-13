<?php

//Класс для работы с БД
class DB
{
    /*  private $host;  private $login;  private $password;  private $db_name;  private $table_name;  */
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

    // Запрос с получением данных из БД (например, SELECT)
    public function query($sql, $params=[])
    {
        // Подготовка запроса
        $sth = $this->dbh->prepare($sql); // sth - statement handler
        // Выполнение запроса с подстановкой
        $sth->execute($params);
        // Получение результата запроса (все строки)
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    // Запрос без получения данных (например, INSERT)
    public function execute($sql, $params=[])
    {
        // Подготовка запроса
        $sth = $this->dbh->prepare($sql); // sth - statement handler
        // Выполнение запроса с подстановкой
        return $sth->execute($params);
    }

    /*
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