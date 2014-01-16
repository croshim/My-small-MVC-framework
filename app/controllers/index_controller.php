<?php

class Index_Controller extends Controller
{
    function indexAction() {        
        $this->view->render('index', 'testdata');
    }
}