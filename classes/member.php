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

    public function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }


    //setters
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }

    public function setBio($bio)
    {
        $this->bio = $bio;
    }


    //getters
    public function getFname()
    {
        return $this->fname;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getSeeking()
    {
        return $this->seeking;
    }

    public function getBio()
    {
        return $this->bio;
    }

}