<?php
/*
====================================
-- 028 - Error Control Operator 
-- link : None 
====================================
*/
?>
<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */

  // Variable
  $a = 10;
  $b = @$a or die("Variable Not Found");

  echo "Test $b";
  echo '<br>';

  // File
  $f = @file("osama.txt") or die("File Not Found");
  echo '<pre>';
  print_r($f);
  echo '</pre>';
  echo '<br>';

  // Include
  (@include("osama_elzero.php")) or die("Include File Not Found");