<?php
//FRONT CONTROLLER

    //1.ALLSOME SETTINGS
    ini_set('display_errors',1);
    error_reporting(E_ALL);


    //2.CONNECT SYSTEM FILES
    define('FILEPLACE', dirname(__FILE__));
    require_once(FILEPLACE.'/components/Router.php');

    //3.CONNECT DB
    require_once(FILEPLACE.'/components/Db.php');


    //4.CALL ROUTER
    $FirstRouter = new Router();
    $FirstRouter->run();
