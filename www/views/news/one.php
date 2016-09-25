<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Страница просмотра новости</title>
</head>
<body>
    <a href="#"><h2><?php echo $this->data->id . '. ' . $this->data->title . '<br>'; ?></h2></a>
    <h3><?php echo $this->data->date . '<br>'; ?></h3>
    <p><?php echo $this->data->description . '<br>' . '-------' . '<br>'?></p>
    <a href="/"><p>Вернуться на главную страницу</p></a>
</body>
</html>