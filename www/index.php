<?php

//phpinfo();
/*
require_once __DIR__ . '/models/news.php';

$items = getAllNews();

require_once __DIR__ . '/views/index.php';
*/

require_once __DIR__ . '/NewsClass.php';

$news = new NewsClass();
$news_list = $news->getAllNews();
var_dump($news_list);

require_once __DIR__ . '/views/index.php';