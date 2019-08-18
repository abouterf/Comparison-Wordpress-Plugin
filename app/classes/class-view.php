<?php

class View
{

    public static function render($view_name)
    {
        $view_name = PLUGIN_DIR . 'view/' . $view_name . '.php';
        include $view_name;
    }


}
