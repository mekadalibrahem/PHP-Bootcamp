<?php
/*
====================================
-- 042 - Include, Require 
-- link : None 
====================================
*/
?>
<?php

  /*
    Control Structure
    - Including Files

    Include
    Require
  */

  include_once("test.php"); // $a = 10;

  echo $a . '<br>';

  $a = 20;

  include_once("test.php"); // $a = 10;

  echo $a . '<br>';

  echo "Continue";