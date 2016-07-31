<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Страница просмотра новости</title>
</head>
<body>
    <?php foreach($news_list as $news): ?>
    <a href="#"><h2><?php echo $news->id . '. ' . $news->title . '<br>'; ?></h2></a>
    <h3><?php echo $news->date . '<br>'; ?></h3>
    <p><?php echo $news->description . '<br>' . '-------' . '<br>'?></p>
    <a href="../index.php"><p>Вернуться на главную страницу</p></a>
    <?php endforeach; ?>
</body>
</html>