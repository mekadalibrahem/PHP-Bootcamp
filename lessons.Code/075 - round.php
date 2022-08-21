<?php
/*
====================================
-- 075 - round 
-- link : None 
====================================
*/
?>
<?php

  /*
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
  */

  echo round(5.99) . "<br>";
  echo round(5.50) . "<br>";
  echo round(5.49) . "<br>";
  echo round(5.10) . "<br>";

  echo round(5.99, 1) . "<br>"; // 6
  echo round(5.94, 1) . "<br>"; // 5.9
  echo round(5.995, 2) . "<br>"; // 6
  echo round(5.994, 1) . "<br>"; // 6
  echo round(5.994, 2) . "<br>"; // 5.99

  echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
  echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";