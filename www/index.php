<?php

require_once __DIR__ . '/models/NewsModel.php';

$news = new NewsModel();
$news_list = $news->getAllNews();

require_once __DIR__ . '/views/index.php';