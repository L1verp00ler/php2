<?php

class NotFoundController
{
    public function actionMain()
    {
        $view = new View();
        $view->data('common');
        $view->display('404.php');
    }
}