<?php

/**
 * Created by PhpStorm.
 * User: ruban
 * Date: 07.04.2018
 * Time: 21:48
 */
class DefaultController extends Controller
{
    function indexAction(){

        $this->render('default/index');

    }

}