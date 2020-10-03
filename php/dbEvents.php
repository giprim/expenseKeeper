<?php

class DBEvents{
    private $dbconnection;
    function __construct(){
        $this->dbconnection = new DBConnection(); 
    }

    function insertUser ($user) {

        $query = "insert into users(username, email, password) values('$user->username', '$user->email', '$user->password')"; 
       return $this->dbconnection->excuteQuery($query);
    }

    function fetchUser() {
        $arrayOfUsers = [];
        $query = "select * from users ";
        $result = $this->dbconnection->excuteQuery($query);
        while($row = mysqli_fetch_assoc($result)){
            $arrayOfUsers[] = new User($row['username'], $row['email'], $row['password']);

        //    echo $row['username']. " " . $row['email']. " " . $row['password']. "\n\r\n";
        }
        return $arrayOfUsers;
    }
}

?>