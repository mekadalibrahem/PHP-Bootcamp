<?php
/*
====================================
-- 055 - String Functions Part 2 [ 7 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */

  $friends = ["Ahmed", "Osama", "Ali", "Salem"];

  echo implode(" ", $friends) . "<br>";
  echo implode(", ", $friends) . "<br>";
  echo implode("@@", $friends) . "<br>";
  echo implode($friends) . "<br>";

  $str = "Elzero Web School Is Cool";

  echo "<pre>";
  print_r(explode(" ", $str));
  echo "</pre>";

  echo "<pre>";
  print_r(explode("I", $str));
  echo "</pre>";

  echo "<pre>";
  print_r(explode(" ", $str, 3));
  echo "</pre>";

  echo "<pre>";
  print_r(explode(" ", $str, -2));
  echo "</pre>";

  echo str_shuffle("Elzero") . "<br>";
  echo strrev("Elzero") . "<br>";

  echo strlen("   Elzero  ") . "<br>";
  echo strlen(trim("   Elzero  ")) . "<br>";

  echo trim("#@@Elzero@@@###", "@") . "<br>";

  echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
  echo ltrim("#@@Elzero@@@###", "#@") . "<br>";