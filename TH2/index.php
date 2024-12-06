<?php

require './Controllers/BaseController.php';
$controllerName = ucfirst((strtolower($_REQUEST['controller'])?? 'Home') . 'Controller') ;
 
$actionName = $_REQUEST['action']?? 'index';
require "./Controllers/${controllerName}.php";

$controllerOpject = new $controllerName;

$controllerOpject -> $actionName();