<?php
/*
====================================
--103 - Session Edit And Practice 
-- link : https://youtu.be/CE_FSxAzWs4
====================================
*/
?>
<?php

  /*
    Sessions
    - Advanced Information
    - Edit
    - Views Count
  */

  // session_id("lkjsdklfjksdfsdf");

  session_start();

  // echo session_id();

  $_SESSION['name'] = "Elzero";

  isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

  echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'];

  echo '<a href="about.php">About</a>';