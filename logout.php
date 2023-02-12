<?php

session_start();

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    unset($_SESSION["isAdmin"]);
    header("location: login.php");
    exit();
}

