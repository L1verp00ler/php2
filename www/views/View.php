<?php

class View
{
    //const PATH = __DIR__ . '/news/';

    protected $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function display($template)
    {
        //include self::PATH . $template;

        // $this->data['items'] --> $items
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        include __DIR__ . $template;
    }
}