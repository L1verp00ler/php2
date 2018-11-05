<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ошибка!!!</title>
</head>
<body>
<h1>Логи (Журнал ошибок)</h1>
<div>
    <?php
        //var_dump($log);
        //die();
        foreach ($log as $key => $value) {
            if ($key == 0 || $key % 7 == 0) { // выделяем время возникновения ошибки
                echo '------------------------------------------------------------------';
                echo '<h3>' . $value . '</h3>';
            } else {
                echo '<p>' . $value . '</p>';
            }
        }
    ?>
</div>
<a href="/"><p>Вернуться на главную страницу</p></a>
</body>
</html>