<?php

//phpinfo();

require_once __DIR__ . '/models/news.php';

$date = $_POST['date'];
$title = $_POST['title'];
$description = $_POST['description'];

$add_news = addNews($date, $title, $description);

if ($add_news) {
    $error = 'false';
} else {
    $error = 'true';
}

$items = getAllNews();

require_once __DIR__ . '/views/index.php';
