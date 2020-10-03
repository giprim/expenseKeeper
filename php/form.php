<?php
require_once('User.php');
require_once('dbEvents.php');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$user = new User($username,$email,$password);
$db = new DBEvents();
echo $user->get_userDetails();
echo "\n\r\n";

echo $db->insertUser($user);

$result = $db->fetchUser();
// echo $result;
$index = 0;

// while($index < $result.length)
// {
//     echo $result[$index]->username . $result[$index]->email . "\n\r\n";
//     $index ++;
// }

?>