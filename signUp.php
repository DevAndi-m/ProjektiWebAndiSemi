<?php
require 'config.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["psw"];
  $confirmpassword = $_POST["psw-repeat"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");

  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email is already taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user (name, username, email, password) VALUES ('$name', '$username','$email','$password')";
      mysqli_query($conn,$query);
      echo
      "<script> alert('Registation Successful');</script>";

    }
    else{
      echo
    "<script> alert('Password Does Not Match'); </script>";
    }
  }


}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" href="style2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">

    </head>
    <ul id="navbar">
        <li id="logoli"> <a href="index.php"><img src="images/Logo.png" id="logo"></a></li>
        <li><a href="#con4">Book your journey</a></li>
        <li><a href="contactUs.php">Contact us</a></li>
        <li id="rightnavel"><a href="signUp.php">Sign up</a></li>
        <li id="rightnavel"><a href="login.php">Login</a></li>
    </ul>

    <body>  
<form class="" action="#login.php" method="post" autocomplete="off">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
  
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
      <div class="clearfix">
       
        <button type="submit" class="signupbtn" name='submit'>Sign Up</button>
      </div>
    </div>
  </form>
 </body>
  </html>