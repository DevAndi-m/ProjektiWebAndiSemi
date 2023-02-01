<?php
session_start();
require 'config.php';

if(isset($_GET["logout"])) {
  session_destroy();
  header("Location: login.php");
}
?>
