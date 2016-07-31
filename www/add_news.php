<?php

require_once __DIR__ . '/models/NewsModel.php';

$date = $_POST['date'];
$title = $_POST['title'];
$description = $_POST['description'];

$news = new NewsModel();
$add_news = $news->addNews($date, $title, $description);

if ($add_news) {
    $error = 'false';
} else {
    $error = 'true';
}

require_once __DIR__ . '/views/add_news.php';
