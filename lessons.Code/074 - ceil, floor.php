<?php
/*
====================================
-- 074 - ceil, floor 
-- link : None 
====================================
*/
?>
<?php

  /*
    Math Functions

    - ceil(Number[Required])
    --- Round Up To Integer

    - floor(Number[Required])
    --- Round Down To Integer
  */

  // -1 -2 -3 -4 -5 -6
  // 1  2  3  4  5  6

  echo ceil(5.99) . "<br>";
  echo ceil(5.49) . "<br>";
  echo ceil(5.10) . "<br>";
  echo ceil(5.01) . "<br>";
  echo ceil(-5.99) . "<br>"; // -5

  echo floor(5.99) . "<br>";
  echo floor(5.49) . "<br>";
  echo floor(5.10) . "<br>";
  echo floor(5.01) . "<br>";
  echo floor(-5.99) . "<br>"; // -6