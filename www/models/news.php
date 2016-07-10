<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 01.06.2016
 * Time: 23:46
 */

require_once __DIR__.'/../functions/sql.php';

/*
 * Получение списка всех новостей
 */
function getAllNews()
{
    $sql = 'SELECT * FROM news ORDER BY date DESC';
    return sql_query($sql);
}

/*
 * Получение конкретной новости
 */
function getNews($id)
{
    $sql = 'SELECT * FROM news WHERE id=' . $id;
    return sql_query($sql);
}

/*
 * Добавление новости
 */
function addNews($date, $title, $description)
{
    $sql = "INSERT INTO news (date, title, description) VALUES ('" . $date . "','" . $title . "','" . $description . "')";
    return sql_exec($sql);
}