<?php

class View
{
	private $controller;

	function __construct($controller) {
        $this->controller = strtolower(substr($controller, 0, strpos($controller, "_Controller")));
    } 
    function render($view, $data = null) {
    	include 'app/views/layout/layout.php';
    	$content = 'app/views/'.$this->controller. '/' . $view . '.php';
    	if (file_exists($content)) {
    		$content = include_once $content;
    	}
    	else {
    		Router::ErrorPage();
    	}
    }
}