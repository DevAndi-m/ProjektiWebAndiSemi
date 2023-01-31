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

          <li id="logoli"> <a href="index.html"><img src="images/Logo.png" id="logo"></a></li>
            <li>Book your journey</li>
            <li>Shop</li>
            <li><a href="contactUs.html">Contact us</a></li>
            <li id="rightnavel"><a href="signUp.html">Sign up</a></li>
            <li id="rightnavel"><a href="login.html">Login</a></li>
            
        </ul>

<form action="action_page.php" method="post">
    

    <div class="container">

      <h1>Login</h1>
      <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
      <p>Please fill in this form to login to your account...aasd.</p>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </form>
    </div>
  
   
  </form>

  <script>  
    function validation()  
    {  
        var id=document.f1.user.value;  
        var ps=document.f1.pass.value;  
        if(id.length=="" && ps.length=="") {  
            alert("User Name and Password fields are empty");  
            return false;  
        }  
        else  
        {  
            if(id.length=="") {  
                alert("User Name is empty");  
                return false;  
            }   
            if (ps.length=="") {  
            alert("Password field is empty");  
            return false;  
            }  
        }                             
    }  
</script>  

 </body>
 </html>