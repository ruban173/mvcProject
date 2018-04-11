<?php

/**
 * Created by PhpStorm.
 * User: ruban
 * Date: 11.04.2018
 * Time: 18:02
 */
class Validation
{
    public static function string($string,$len=6){
        return (!strlen($string)<$len)? "Количество символов меньше $len":;

    }


}