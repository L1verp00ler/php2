<?php

/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 20.07.2016
 * Time: 0:15
 */
class DB
{
    private $host;
    private $login;
    private $password;
    private $db_name;
    private $table_name;

    public function __construct($host, $login, $password, $db_name)
    {
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->db_name = $db_name;

        mysql_connect($this->host, $this->login, $this->password);
        mysql_selectdb($this->db_name);
    }

    public function add_new_item()
    {

    }

    public function update_item()
    {

    }

    public function get_all_items($table_name)
    {
        $this->table_name = $table_name;
        $sql = 'SELECT * FROM ' . $this->table_name;
        var_dump($sql);
        $res = mysql_query($sql);
        $result = [];
        while ($row = mysql_fetch_assoc($res)){
            $result[] = $row;
        }
        return $result;
    }
}

$db = new DB('php2.local', 'root', '', 'test');
var_dump($db);
echo '---';
$result = $db->get_all_items('news');
var_dump($result);