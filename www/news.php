<?php

require_once __DIR__ . '/models/News.php';

$id = $_GET['id'];
$news_list = News::getOne($id);

require_once __DIR__ . '/views/one.php';