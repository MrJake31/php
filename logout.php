<?php
  $site = "SecCodeAudit &rarrow;";
  require "classes/user.php";
  User::logout();
  header("Location: /login.php");
  die();
?>


