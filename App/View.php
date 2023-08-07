<?php

namespace App;

class View

{
    protected $data = [];

    use Magic;

    public function render($template)
    {
        ob_start();

        foreach ($this->data as $prop => $value)
        {
            $$prop = $value;
        }
        include $template;
        return ob_get_clean();
    }

    public function display($template): void
    {
        echo $this->render($template);
    }




}