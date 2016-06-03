<?php

//phpinfo();

require_once __DIR__ . '/models/news.php';

$items = getAllNews();

require_once __DIR__ . '/views/index.php';
