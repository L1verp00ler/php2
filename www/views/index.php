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
    <?php foreach($items as $item): ?>
    <h2><?php echo $item['id'] . '. ' . $item['date'] . '<br>'; ?></h2>
    <h3><?php echo $item['title'] . '<br>'; ?></h3>
    <p><?php echo $item['description'] . '<br>' . '-------' . '<br>'?></p>
    <?php endforeach; ?>
</body>
</html>