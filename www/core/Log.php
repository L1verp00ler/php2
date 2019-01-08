<?php

namespace App\Core;

class Log
{
    public function addRecord($e)
    {
        file_put_contents(__DIR__ . '/../errors.txt', date('Y-m-d H:i:s') . ' ; ' . $e->getCode() . ' ; ' . $e->getMessage() . ' ; ' . $e->getFile() . ' ; ' . $e->getLine() . ' ; ' . $e->getTraceAsString() . ' ; ' . "\n", FILE_APPEND | LOCK_EX);
    }
}
