<?php

/**
 * Created by PhpStorm.
 * Users: ruban
 * Date: 07.04.2018
 * Time: 21:48
 */
class DefaultController extends Controller
{
    function indexAction(){

        $this->render('default/index');

    }
    function loginAction(){

        $this->render('default/login');

    }

    function registerAction(){

        $this->render('default/register');

    }
    function logoutAction(){

        $this->render('default/index');

    }

}