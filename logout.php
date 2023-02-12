<?php

session_start();

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["email"]);
    header("location: login.php");
    exit();
}

