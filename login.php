<?php
session_start();
require 'config.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$username'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) { 
    if ($password == $row["password"]) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $name = $row["username"];
      header("Location: index.php");
    } else {
      echo "<script> alert('Wrong Password'); </script>";
    }
  } else {
    echo "<script> alert('User Not Registered'); </script>";
  }
}
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
    <li id="rightnavel"><a href="login.php">Login</a></li>
  </ul>
  <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
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
