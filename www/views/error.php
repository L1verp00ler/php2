<?php
switch ($error_code) {
    case 404:
        header('HTTP/1.0 404 Not Found');
        break;
    case 403:
        header('HTTP/1.0 403 Forbidden');
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ошибка!!!</title>
</head>
<body>
<h1><?php echo $error_code; ?></h1>
<div><?php echo $error_text; ?></div>
<a href="/"><p>Вернуться на главную страницу</p></a>
</body>
</html>