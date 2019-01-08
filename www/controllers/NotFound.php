<?php

namespace App\Controllers;

use App\Core\View;

class NotFound
{
    public function actionMain()
    {
        $view = new View();
        $view->display('/common/404.php');
    }
}