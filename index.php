<?php
    //php error reporting
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    //require the autoload file
    require_once ('vendor/autoload.php');

    //start session
    session_start();

    //include validation functions
    include ('model/validate.php');

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

    $f3->route('GET|POST /personal', function($f3) {
        if(isset($_POST['submit']))
        {
            $errors = array();
            if(validPersonal($_POST['first'], $_POST['last'], $_POST['age'], $_POST['phone'], $errors)){
                if($_POST['premium'] == 'true')
                    $member = Premium($_POST['first'], $_POST['last'], $_POST['age'], $_POST['gender'], $_POST['phone']);
                else
                    $member = Member($_POST['first'], $_POST['last'], $_POST['age'], $_POST['gender'], $_POST['phone']);
                $_SESSION['member'] = $member;
                header("Location: http://troemer.greenriverdev.com/328/dating/profile");
            }
            else{
                $f3->set('first', $_POST['first']);
                $f3->set('last', $_POST['last']);
                $f3->set('age', $_POST['age']);
                $f3->set('gender', $_POST['gender']);
                $f3->set('phone', $_POST['phone']);
                $f3->set('errors', $errors);
            }
        }

        $template = new Template();
        echo $template->render('views/personal.html');
    });

    $f3->route('GET|POST /profile', function($f3) {
        if(isset($_POST['submit']))
        {
            $errors = array();
            if(empty($_POST['email'])){
                $errors['email'] = 'Email is required';
                $f3->set('email', $_POST['email']);
                $f3->set('state', $_POST['state']);
                $f3->set('seeking', $_POST['seeking']);
                $f3->set('bio', $_POST['bio']);
                $f3->set('errors', $errors);
            }
            else{
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['state'] = $_POST['state'];
                $_SESSION['seeking'] = $_POST['seeking'];
                $_SESSION['bio'] = $_POST['bio'];
                header("Location: http://troemer.greenriverdev.com/328/dating/interests");
            }
        }

        $template = new Template();
        echo $template->render('views/profile.html');
    });

    $f3->route('GET|POST /interests', function($f3) {
        if(isset($_POST['submit']))
        {
            $errors = array();
            $errors['indoor'] = validIndoor($_POST['indoor']);
            $errors['outdoor'] = validOutdoor($_POST['outdoor']);

            if(empty(implode("", $errors))){
                $_SESSION['indoor'] = $_POST['indoor'];
                $_SESSION['outdoor'] = $_POST['outdoor'];
                header("Location: http://troemer.greenriverdev.com/328/dating/summary");
            }
            else{
                $f3->set('indoor', $_POST['indoor']);
                $f3->set('outdoor', $_POST['outdoor']);
                $f3->set('errors', $errors);
            }
        }

        $template = new Template();
        echo $template->render('views/interests.html');
    });

    $f3->route('GET|POST /summary', function($f3) {
        $f3->set('name', $_SESSION['name']);
        $f3->set('age', $_SESSION['age']);
        $f3->set('gender', $_SESSION['gender']);
        $f3->set('phone', $_SESSION['phone']);
        $f3->set('email', $_SESSION['email']);
        $f3->set('state', $_SESSION['state']);
        $f3->set('seeking', $_SESSION['seeking']);
        $f3->set('bio', $_SESSION['bio']);
        if(isset($_SESSION['indoor']))
            $f3->set('indoor', $_SESSION['indoor']);
        else
            $f3->set('indoor', array());
        if(isset($_SESSION['outdoor']))
            $f3->set('outdoor', $_SESSION['outdoor']);
        else
            $f3->set('outdoor', array());

        $template = new Template();
        echo $template->render('views/summary.html');
    });

    //Run Fat-Free
    $f3->run();
?>