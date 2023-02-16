<?php
// include the Users class
include "./Users.php";

// create a new instance of the Users class
$users = new Users();

// get the form data
$id = $_POST['id'];

// call the createUser method to add the new user to the database
$users->deleteUser($id);

// redirect back to the admin page
header('Location: admin.php');
exit;
?>
