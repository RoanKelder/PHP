<?php
  session_start();

  if(isset( $_SESSION["user"]) && $_SESSION["rol"] == "admin")  {
      echo " welkom ".$_SESSION["user"]. " op het admingedeelte van de website";

      echo "<p><a href='indexH07.php'>inlogscherm</a></p>";
  } else {
      header('location: Inlogscherm.php');
  }

