<?php

class Error_Controller extends Controller
{
    function indexAction() {        
        $this->view->render('error404');
    }
}