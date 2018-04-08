<?php

require_once "IController.php";

class Controller implements IController
{
    private  $views;
    function __construct()
    {
        $this->views=new Views();
    }

    function render($path){

        $body=$this->views->getContent($path);
        FrontController::getInstance()->setBody($body);
    }

    function redirect(){
         header("location:{$_SERVER[REDIRECT_URL ]}");
    }

}