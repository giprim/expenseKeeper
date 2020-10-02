<?php

include_once('dbchecks.php');

class User {
    private $username;
    private $password;
    private $email;
    private $dbchecks;

    function __construct($username, $email, $password){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->dbchecks = new DBChecks();
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

    function insertUser () {
        $query = "insert into users(username, email, password) values('$this->username', '$this->email', '$this->password')";    

       return $this->dbchecks->excuteQuery($query);

    }
    
}


?>