<?php


class SiteController extends Controller
{
    function indexAction(){

        $this->render("site/index","text");

    }

}