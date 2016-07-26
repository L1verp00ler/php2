<?php

//phpinfo();

/*
require_once __DIR__ . '/models/news.php';

$id = $_GET['id'];
$items = getNews($id);

require_once __DIR__ . '/views/news.php';
*/

require_once __DIR__ . '/NewsClass.php';

$id = $_GET['id'];
$news = new NewsClass();
$news_list = $news->getNews($id);
var_dump($news_list);

require_once __DIR__ . '/views/news.php';