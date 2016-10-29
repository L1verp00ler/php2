<?php

// Назначаем контроллер и действие по умолчанию
$ctrl = 'news';
$act = 'all';
// Массив параметров из URI запроса
$params = [];

// Если запрошен любой URI, отличный от корня сайта
if ($_SERVER['REQUEST_URI'] != '/') {
    try {
        // Для того, чтобы через виртуальные адреса можно было также передавать параметры
        // через QUERY_STRING (т.е. через "знак вопроса" - ?param=value),
        // необходимо получить компонент пути - path без QUERY_STRING.
        // Данные, переданные через QUERY_STRING, также как и раньше будут содержаться
        // в суперглобальных массивах $_GET и $_REQUEST.
        $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Разбиваем виртуальный URL по символу "/"
        $uri_parts = explode('/', trim($url_path, ' /'));

        // Если количество частей не кратно 2, значит в URL присутствует ошибка
        // и такой URL обрабатывать не нужно - кидаем исключение, чтобы назначить
        // в блоке catch контроллер и действие, отвечающие за показ 404 страницы.
        if (count($uri_parts) % 2) {
            throw new Exception();
        }

        $ctrl = array_shift($uri_parts); // Получили имя контроллера
        $act = array_shift($uri_parts); // Получили имя действия

        // Получили в $params параметры запроса
        for ($i=0; $i < count($uri_parts); $i++) {
            $params[$uri_parts[$i]] = $uri_parts[++$i];
        }
    } catch (Exception $e) {
        $ctrl = 'notfound';
        $act = 'main';
    }
}

$_GET = array_merge($_GET, $params);

require_once __DIR__ . '/autoload.php';

$controllerClassName = $ctrl . 'Controller';

$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();