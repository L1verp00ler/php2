<?php

//phpinfo();

require_once __DIR__ . '/models/news.php';

$id = $_GET['id'];
$items = getNews($id);

require_once __DIR__ . '/views/news.php';
