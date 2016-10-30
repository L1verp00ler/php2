<?php

class View
{
    //const PATH = __DIR__ . '/news/';

    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
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