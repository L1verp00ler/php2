<?php

require_once __DIR__ . '/models/NewsModel.php';

$id = $_GET['id'];
$news_list = NewsModel::getOneNews($id);

require_once __DIR__ . '/views/news.php';