<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
    <?php foreach($this->data as $news): ?>
    <a href="/news/one/id/<?php echo $news->id; ?>"><h2><?php echo $news->id . '. ' . $news->title . '<br>'; ?></h2></a>
    <h3><?php echo $news->date . '<br>'; ?></h3>
    <p><?php echo $news->description . '<br>' . '-------' . '<br>'?></p>
    <?php endforeach; ?>
    <a href="/admin/addNewsForm">Добавить новость</a>
</body>
</html>