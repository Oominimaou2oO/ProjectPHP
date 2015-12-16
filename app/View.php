<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 16/12/2015
 * Time: 14:37
 */
class View
{
    private $view;

    public function __construct($view) {
        $this->view = $view;
    }

    public function render() {
        $path = __DIR__.DIRECTORY_SEPARATOR.'../views/'.$this->view.'.php';
        if(file_exists($path))
            include_once $path;
        else
            throw new Exception("VIEW NOT FOUND | ".$path." |");
    }

    public static function getView($view) {
        $view = new View($view);
        $view->render();
    }
}