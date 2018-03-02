<?php

/**
 * Class Member
 *
 * This class represents a member on a dating site
 * and keeps track of the information that they
 * will provide, such as name, age, gender, phone
 * number, email, state, gender seeking, and biography
 * @author Tyler Roemer <troemer@greenriver.edu>
 * @copyright 2018
 */

/* Validated Class
        setGender
        setSeeking
        setAge
*/

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

    /**
     * Member constructor.
     *
     * Constructor that takes all the information
     * provided on the first form of the dating site
     * and creates the Member while assigning the
     * values provided
     *
     * @param String $fname - first name
     * @param String $lname - last name
     * @param Integer $age
     * @param String $gender
     * @param Integer $phone
     */
    function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }


        //setters

    /**
     * Sets the first name of the Member
     * @param String $fname - first name
     */
    function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * Sets the last name of the Member
     * @param String $lname - last name
     */
    function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * Sets the age of the Member
     * @param Integer $age
     */
    function setAge($age)
    {
        //check to see if age is non numeric or negative before setting it
        //otherwise set age to 18 (using minimum age as default value)
        if(!is_numeric($age) || $age < 0)
            $this->age = 18;
        else
            $this->age = $age;
    }

    /**
     * Sets the Member's gender
     * @param String $gender
     */
    function setGender($gender)
    {
        //ensures $gender is male, female, or empty
        if(!empty($gender) && $gender != 'female' && $gender != 'male')
            $this->gender = '';
        else
            $this->gender = $gender;
    }

    /**
     * Sets the Member's phone number
     * @param Integer $phone
     */
    function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Sets the Member's Email address
     * @param String $email
     */
    function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Sets the Member's State
     * @param String $state
     */
    function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Sets the Member's sought out gender
     * @param String $seeking
     */
    function setSeeking($seeking)
    {
        //ensures $seeking is male, female, or empty
        if(!empty($seeking) && $seeking != 'female' && $seeking != 'male')
            $this->seeking = '';
        else
            $this->seeking = $seeking;
    }

    /**
     * Sets the Member's biography
     * @param String $bio - Biography
     */
    function setBio($bio)
    {
        $this->bio = $bio;
    }


        //getters

    /**
     * Gets Member's first name
     * @return String $fname - first name
     */
    function getFname()
    {
        return $this->fname;
    }

    /**
     * Gets Member's last name
     * @return String $lname - last name
     */
    function getLname()
    {
        return $this->lname;
    }

    /**
     * Gets Member's age
     * @return Integer $age
     */
    function getAge()
    {
        return $this->age;
    }

    /**
     * Gets Member's gender
     * @return String $gender
     */
    function getGender()
    {
        return $this->gender;
    }

    /**
     * Gets Member's phone number
     * @return Integer $phone
     */
    function getPhone()
    {
        return $this->phone;
    }

    /**
     * Gets Member's email address
     * @return String $email
     */
    function getEmail()
    {
        return $this->email;
    }

    /**
     * Gets Member's State
     * @return String $state
     */
    function getState()
    {
        return $this->state;
    }

    /**
     * Gets Member's sought out gender
     * @return String $seeking
     */
    function getSeeking()
    {
        return $this->seeking;
    }

    /**
     * Gets Member's biography
     * @return String $bio - biography
     */
    function getBio()
    {
        return $this->bio;
    }

}