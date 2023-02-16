<?php
// include the Users class
include "./Users.php";

// create a new instance of the Users class
$users = new Users();

// get the form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
// call the createUser method to add the new user to the database
$users->createUser($username, $email, $hashedPwd);

// redirect back to the admin page
header('Location: admin.php');
exit;
?>
