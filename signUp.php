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

      <li id="logoli"> <a href="index.html"><img src="images/Logo.png" id="logo"></a></li>
      <li>Book your journey</li>
      <li>Shop</li>
      <li><a href="contactUs.html">Contact us</a></li>
      <li id="rightnavel"><a href="signUp.html">Sign up</a></li>
      <li id="rightnavel"><a href="login.html">Login</a></li>
        
    </ul>

    <body>  
<form action="action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
    
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
  
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
      <div class="clearfix">
       
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
 </body>
  </html>