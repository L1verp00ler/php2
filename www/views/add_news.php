<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Результат добавления новости</title>
</head>
<body>
    <?php
    if (isset($error)){
        if ($error == 'true') {
            echo 'Не удалось добавить новость!'.'<br>';
        } else {
            echo 'Новость успешно добавлена!'.'<br>';
        }
    }
    ?>
    <a href="/"><p>Вернуться на главную страницу</p></a>
</body>
</html>