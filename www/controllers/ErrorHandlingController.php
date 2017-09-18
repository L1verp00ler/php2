<?php

class ErrorHandlingController
{
    public function actionRun($e)
    {
        // записываем информацию об ошибке в лог
        $log = new Log();
        $log->addRecord($e);

        /*
        echo $e->getCode() . ' || ' . $e->getMessage() . ' ||| (EXC) ';
        echo '</br>';
        var_dump($e->getLine());
        echo '</br>';
        var_dump($e->getFile());
        echo '</br>';
        var_dump($e->getTraceAsString());
        die();
        */

        $view = new View();

        if ($e instanceof PDOException) {
            $view->error_code = 403;
            $view->error_text = 'Не удалось подключиться к базе данных!';
        } elseif ($e instanceof E404Exception) {
            $view->error_code = $e->getCode();
            $view->error_text = $e->getMessage();
        } else {
            $view->error_text = 'Необрабатываемое исключение!';
        }

        $view->display('error.php');
    }
}