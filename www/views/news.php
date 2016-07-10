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
    <title>Страница просмотра новости</title>
</head>
<body>
    <?php foreach($items as $item): ?>
    <a href="#"><h2><?php echo $item['id'] . '. ' . $item['title'] . '<br>'; ?></h2></a>
    <h3><?php echo $item['date'] . '<br>'; ?></h3>
    <p><?php echo $item['description'] . '<br>' . '-------' . '<br>'?></p>
    <a href="../index.php"><p>Вернуться на главную страницу</p></a>
    <?php endforeach; ?>
</body>
</html>