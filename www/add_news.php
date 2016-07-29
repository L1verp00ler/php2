<?php

//require_once __DIR__ . '/models/NewsModel.php';

require_once __DIR__ . '/models/NewsModel.php';

$date = $_POST['date'];
$title = $_POST['title'];
$description = $_POST['description'];

//$add_news = addNews($date, $title, $description);
$news = new NewsModel();
//$news->date = $date;
//$news->title = $title;
//$news->description = $description;

/// Вполне возможно, что можно не присваивать значения свойствам класса (выше), а передать их в функцию напрямую!
//$add_news = $news->addNews($news->date, $news->title, $news->description);
$add_news = $news->addNews($date, $title, $description);

if ($add_news) {
    $error = 'false';
} else {
    $error = 'true';
}

require_once __DIR__ . '/views/add_news.php';
