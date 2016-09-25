<?php

class View
{
    public $data;
    public $directory;

    public function data($directory, $data = null)
    {
        $this->data = $data;
        $this->directory = $directory;
    }

    public function display($filename)
    {
        require_once __DIR__ . '/' . $this->directory . '/' . $filename;
    }
}