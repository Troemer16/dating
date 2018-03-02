<?php
    /*
       CREATE TABLE Members (
            member_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            fname VARCHAR(30) NOT NULL,
            lname VARCHAR(30) NOT NULL,
            age INT(3) NOT NULL,
            gender ENUM('male', 'female'),
            phone INT(10) NOT NULL,
            email VARCHAR(150) NOT NULL,
            state ENUM('washington', 'oregon', 'idaho', 'california'),
            seeking ENUM('male', 'female'),
            bio TEXT,
            premium TINYINT(1) NOT NULL,
            image VARCHAR(150),
            interests VARCHAR(120)
        );
     */

    //include configuration file
    require_once ('/home/troemerg/public_html/config.php');

    class Database
    {

    }