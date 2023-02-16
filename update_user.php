<?php 
include "./Users.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  // Call the updateUser method with the retrieved values
  $users = new Users();
  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
  $users->updateUser($id, $name, $email, $hashedPwd);
  header('Location: admin.php');
  exit;
}
?>