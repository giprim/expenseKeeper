<?php

include_once('dbConnection.php');

class User {
    public $username;
    public $password;
    public $email;
   

    function __construct($username, $email, $password){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    function get_username(){
        return $this->username;
    }
    function get_password(){
        return $this->password;
    }
   
    function get_email(){
        return $this->email;
    }
    
    function get_userDetails(){
        return $this->get_username() . " " . $this->get_password() . " " . $this->get_email();
    }    
}


?>