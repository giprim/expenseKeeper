<?php

class User {
    private $firstname;
    private $lastname; 
    private $age;
    private $gender;
    private $email;

    function __construct($firstname, $lastname, $age, $gender, $email){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->gender = $gender;
        $this->email = $email;
    }

    function get_firstname(){
        return $this->firstname;
    }
    function get_lastname(){
        return $this->lastname;
    }
    function get_age(){
        return $this->age;
    }
    function get_gender(){
        return $this->gender;
    }
    function get_email(){
        return $this->email;
    }

    function get_firstAndLastName(){
        return $this->get_firstname() . " " . $this->get_lastname();
    }
    function get_userDetails(){
        return $this->get_firstname() . " " . $this->get_lastname() . " " . $this->get_age() . " " . $this->get_email();
    }
}

$first = $_POST['first'];
$last = $_POST['last'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];


$user = new User($first, $last, $age, $gender, $email);


echo $user->get_userDetails();



?>