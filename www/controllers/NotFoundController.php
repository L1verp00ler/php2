<?php

class NotFoundController
{
    public function actionMain()
    {
        $view = new View();
        $view->display('/common/404.php');
    }
}