<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 01.06.2016
 * Time: 23:46
 */

require_once __DIR__.'/../functions/sql.php';

function getAllNews()
{
    $sql = 'SELECT * FROM news';
    return sql_query($sql);
}