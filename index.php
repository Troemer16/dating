<?php
    //php error reporting
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    //require the autoload file
    require_once ('vendor/autoload.php');
    //include validation functions
    include ('model/validation.php');

    //create an instance of the base class
    $f3 = Base::instance();

    //set debug level
    //0 = no error reporting, 3 = report all errors
    $f3->set('DEBUG', 3);

    //Define a default route
    $f3->route('GET /', function() {
        $template = new Template();
        echo $template->render('views/home.html');
    });

    $f3->route('GET|POST /personal', function() {
        if(isset($_POST['submit']))
        {
            header("Location: http://troemer.greenriverdev.com/328/dating/profile");
        }

        $template = new Template();
        echo $template->render('views/personal.html');
    });

    $f3->route('GET|POST /profile', function() {
        if(isset($_POST['submit']))
        {
            header("Location: http://troemer.greenriverdev.com/328/dating/interests");
        }

        $template = new Template();
        echo $template->render('views/profile.html');
    });

    $f3->route('GET|POST /interests', function() {
        if(isset($_POST['submit']))
        {
            header("Location: http://troemer.greenriverdev.com/328/dating/summary");
        }

        $template = new Template();
        echo $template->render('views/interests.html');
    });

    $f3->route('GET|POST /summary', function() {
        $template = new Template();
        echo $template->render('views/summary.html');
    });

    //Run Fat-Free
    $f3->run();
?>