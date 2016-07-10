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
    <title>Стартовая страница</title>
</head>
<body>
    <form action="../add_news.php" method="post">
        <label for="date">Дата добавления новости:</label><br>
        <input type="date" id="date" name="date" required><br>
        <label for="title">Заголовок новости:</label><br>
        <input type="text" id="title" name="title" required><br>
        <label for="desc">Текст новости:</label><br>
        <input type="text" id="desc" name="description" required><br>
        <input type="submit" value="Добавить"><br>
    </form>
</body>
</html>