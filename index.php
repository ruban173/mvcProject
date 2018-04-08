<?php


require_once "vendor/autoload.php";

$front=FrontController::getInstance();
$front->route();
echo $front->getBody();
