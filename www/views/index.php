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
    <title>Главная страница</title>
</head>
<body>
    <?php foreach($items as $item): ?>
    <a href="../news.php?id=<?php echo $item['id'];?>"><h2><?php echo $item['id'] . '. ' . $item['title'] . '<br>'; ?></h2></a>
    <h3><?php echo $item['date'] . '<br>'; ?></h3>
    <p><?php echo $item['description'] . '<br>' . '-------' . '<br>'?></p>
    <?php endforeach; ?>
    <a href="../add_news_form.php">Добавить новость</a>
</body>
</html>