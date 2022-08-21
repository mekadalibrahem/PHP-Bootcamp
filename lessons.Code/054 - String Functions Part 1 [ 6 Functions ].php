<?php
/*
====================================
-- 054 - String Functions Part 1 [ 6 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    String Functions
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
  */

  echo lcfirst("Elzero Web School") . "<br>";
  echo ucfirst("elzero web school") . "<br>";
  echo strtolower("ELZERO WEB SCHOOL") . "<br>";
  echo strtoupper("elzero web school") . "<br>";
  echo ucwords("elzero web school") . "<br>";
  echo ucwords("elzero web|school", "|") . "<br>";
  echo str_repeat("Elzero", 3);