<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Страница просмотра новости</title>
</head>
<body>
    <a href="#"><h2><?php echo $one_news->id . '. ' . $one_news->title . '<br>'; ?></h2></a>
    <h3><?php echo $one_news->date . '<br>'; ?></h3>
    <p><?php echo $one_news->description . '<br>' . '-------' . '<br>'?></p>
    <a href="/"><p>Вернуться на главную страницу</p></a>
</body>
</html>