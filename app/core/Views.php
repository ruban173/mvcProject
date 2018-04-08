<?php


class Views
{

   public  $layout;

     function __construct($layout="app/views/layout/template.php")
     {
         $this->layout=$layout;
     }

    function getContent($content="", $model=null){


        // is_file(app/views/$content.php)
         ob_start();
         include($this->layout);
         return ob_get_clean();
     }



}
