<?php

require_once "IController.php";

class Controller implements IController
{
    private  $views;
    function __construct()
    {
        $this->views=new Views();
    }

    function render($path,$model=null){
        $this->views->model=$model;
        $body=$this->views->getContent($path);
        FrontController::getInstance()->setBody($body);
    }

    function redirect($url=null){
         header("location:http://{$_SERVER[SERVER_NAME ]}/$url");
    }

}