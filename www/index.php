<?php

require_once __DIR__ . '/models/NewsModel.php';

$news_list = NewsModel::getAllNews();

require_once __DIR__ . '/views/index.php';