<?php

    define("DS",DIRECTORY_SEPARATOR);
    define("ROOT",dirname(__DIR__));
    define("APP",ROOT.DS.'app');
    define("CONFIG",APP.DS.'config');
    define("CONTROLLERS",APP.DS.'controller');
    define("CORE",APP.DS.'core');
    define("MODELS",APP.DS.'models');
    define("VIEW",APP.DS.'views');

    ///config
    define("SERVER","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","simbaa");
    define("DATABASE_TYPE","mysql");
    define("DOMAIN_NAME","http://simba.test/");


    define('PATH', DOMAIN_NAME.'/');

    require_once("../vendor/autoload.php");
    $app = new MVC\core\app();
?>