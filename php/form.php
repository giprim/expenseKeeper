<?php
require_once('User.php');
require_once('dbchecks.php');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$user = new User($username,$email,$password);
$db = new DBChecks();
echo $user->get_userDetails();
echo "\n\r\n";
echo $user->testConnection();




?>