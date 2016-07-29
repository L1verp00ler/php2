<?php

/*
require_once __DIR__ . '/models/NewsModel.php';

$id = $_GET['id'];
$items = getNews($id);

require_once __DIR__ . '/views/NewsModel.php';
*/

require_once __DIR__ . '/models/NewsModel.php';

$id = $_GET['id'];
$news = new NewsModel();
$news_list = $news->getOneNews($id);

require_once __DIR__ . '/views/news.php';