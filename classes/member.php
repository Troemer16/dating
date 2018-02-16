<?php

    class Member
    {
        protected $fname;
        protected $lname;
        protected $age;
        protected $gender;
        protected $phone;
        protected $email;
        protected $state;
        protected $seeking;
        protected $bio;

        function __construct($fname, $lname, $age, $gender, $phone)
        {
            $this->fname = $fname;
            $this->lname = $lname;
            $this->age = $age;
            $this->gender = $gender;
            $this->phone = $phone;
        }


        //setters
        function setFname($fname)
        {
            $this->fname = $fname;
        }

        function setLname($lname)
        {
            $this->lname = $lname;
        }

        function setAge($age)
        {
            $this->age = $age;
        }

        function setGender($gender)
        {
            $this->gender = $gender;
        }

        function setPhone($phone)
        {
            $this->phone = $phone;
        }

        function setEmail($email)
        {
            $this->email = $email;
        }

        function setState($state)
        {
            $this->state = $state;
        }

        function setSeeking($seeking)
        {
            $this->seeking = $seeking;
        }

        function setBio($bio)
        {
            $this->bio = $bio;
        }


        //getters
        function getFname()
        {
            return $this->fname;
        }

        function getLname()
        {
            return $this->lname;
        }

        function getAge()
        {
            return $this->age;
        }

        function getGender()
        {
            return $this->gender;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function getEmail()
        {
            return $this->email;
        }

        function getState()
        {
            return $this->state;
        }

        function getSeeking()
        {
            return $this->seeking;
        }

        function getBio()
        {
            return $this->bio;
        }

}