<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Страница просмотра новости</title>
</head>
<body>
    <a href="#"><h2><?php echo $item->id . '. ' . $item->title . '<br>'; ?></h2></a>
    <h3><?php echo $item->date . '<br>'; ?></h3>
    <p><?php echo $item->description . '<br>' . '-------' . '<br>'?></p>
    <a href="/"><p>Вернуться на главную страницу</p></a>
</body>
</html>