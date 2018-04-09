<?php

class Config
{
    private static $_instance;
    private static $config;

    private function __construct()
    {
        self::$config=include ("/app/config/params.php");
    }
    private function __clone()
    {

    }

    public static function getInstance()
    {
        if(self::$_instance==null)
            self::$_instance=new self;
         return self::$_instance;
    }

    public  function getParams($param)
    {
    if(self::$config[$param])
        return   self::$config[$param];
    throw new Exception('Параметр с таким ключем в  не найден!');

    }

}