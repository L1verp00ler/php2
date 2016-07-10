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

require_once __DIR__ . '/views/add_news.php';
