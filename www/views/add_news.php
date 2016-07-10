<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 01.06.2016
 * Time: 23:23
 */
?>

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
    <a href="../index.php"><p>Вернуться на главную страницу</p></a>
</body>
</html>