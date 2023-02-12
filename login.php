<?php

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
</head>
<body>
  <ul id="navbar">
    <li id="logoli"> <a href="index.php"><img src="images/Logo.png" id="logo"></a></li>
    <li><a href="#con4">Book your journey</a></li>
    <li><a href="contactUs.php">Contact us</a></li>
    <li id="rightnavel"><a href="signUp.php">Sign up</a></li>
  </ul>
  <form class="" action="includes/login.included.php" method="post">
    <div class="container">
      <h1>Login</h1>
      <p>Please fill in this form to login to your account...</p>
      <label for="username"><b>Username or Email</b></label>
      <input type="text" placeholder="Enter Username or Email" name="username" id="username" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button type="submit" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form>
</body>
</html>
