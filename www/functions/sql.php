<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 01.06.2016
 * Time: 22:28
 */

function sql_connect()
{
    mysql_connect('php2.local', 'root', '');
    mysql_select_db('test');
}

function sql_query($sql)
{
    sql_connect();
    $res = mysql_query($sql);
    $result = [];
    while ($row = mysql_fetch_assoc($res)){
        $result[] = $row;
    }
    return $result;
}