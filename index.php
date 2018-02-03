<?php
    //php error reporting
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    //require the autoload file
    require_once ('vendor/autoload.php');

    //create an instance of the base class
    $f3 = Base::instance();

    //set debug level
    //0 = no error reporting, 3 = report all errors
    $f3->set('DEBUG', 3);

    //Define a default route
    $f3->route('GET /', function() {
        $view = new View;
        echo $view->render('pages/home.html');
    });

    $f3->route('GET /personal', function() {
        $view = new View;
        echo $view->render('pages/personal.html');
    });

    //Run Fat-Free
    $f3->run();
?>