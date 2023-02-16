<?php 
session_start();
$user_id = $_SESSION['isAdmin'];
if ($_SESSION['isAdmin'] == "false") {
    // Check if the user is an admin
    header("location: index.php");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css"> 
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
        <div class="users">
    <h1>Users</h1>
    <?php
    include "./Users.php";
    // create a new instance of the Users class
    $users = new Users();
    
    // fetch all the users from the database
    $allUsers = $users->getAllUsers();

    // loop through the users and display their details
    $printedAdminsHeader = false;

foreach ($allUsers as $user) {
    if ($user['isAdmin'] == 'false') {
        if (!$printedAdminsHeader) {
            echo '<h1>Users</h1>';
            $printedAdminsHeader = true;
        }
        echo '<p>';
        echo '<span>ID: </span>' . $user['users_id'] . '<br>';
        echo '<span>Name: </span>' . $user['users_username'] . '<br>';
        echo '<span>Email: </span>' . $user['users_email'] . '<br>';
        echo '<span>Password: </span>' . $user['users_psw'] . '<br>';
        echo '</p>';
    } else {
        if (!$printedAdminsHeader) {
            echo '<h1>Admins</h1>';
            $printedAdminsHeader = false;
        }
        echo '<p>';
        echo '<span>ID: </span>' . $user['users_id'] . '<br>';
        echo '<span>Name: </span>' . $user['users_username'] . '<br>';
        echo '<span>Email: </span>' . $user['users_email'] . '<br>';
        echo '<span>Password: </span>' . $user['users_psw'] . '<br>';
        echo '</p>';
    }
}?>
</div>
<div class="crud">
<div class="create">
<h1>Create User</h1>

    <form action="create_user.php" method="post" class="createForm">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Create User" class="kisheButona1">
    </form>
</div>
<div class="update">
    <h1>Update User</h1>
    <form method="POST" action="update_user.php" class="updateForm">

    <label for="name">Id:</label>
  <input type="text" id="id" name="id">
  <br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password">
  <br>
  <input type="submit" value="Update User" class="kisheButona2">
</form>
</div>

<div class="delete">
    <h1>Delete User</h1>
    <form method="POST" action="delete_user.php" class="deleteForm">

    <label for="name">Id:</label>
  <input type="text" id="id" name="id">
  <br>
  <input type="submit" value="Delete User" class="kisheButona3">
</form>
</div>
</div>
</body>
</html>
