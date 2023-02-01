<?php
$server_name='localhost';

$username='root';

$password='';

$database_name='projektiwebandisemi';
$query = "INSERT INTO tb_user (name, username, email, password) VALUES ('$name', '$username','$email','$password')";
$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
