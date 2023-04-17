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
    define("DATABASE","portfolio");
    define("DATABASE_TYPE","mysql");
    define("DOMAIN_NAME","http://form.com/");


    require_once("../vendor/autoload.php");
    $app = new MVC\core\app();
?>