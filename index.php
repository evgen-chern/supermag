<?php
//FRONT CONTROLLER

    //1.ALLSOME SETTINGS
    ini_set('display_errors',1);
    error_reporting(E_ALL);


    //2.CONNECT SYSTEM FILES AND DB
    define('FILEPLACE', dirname(__FILE__));
    require_once(FILEPLACE.'/components/Autoload.php');


    //3.CALL ROUTER
    $FirstRouter = new Router();
    $FirstRouter->run();
