<?php
/*
====================================
-- 029 - Operator Precedence 
-- link : None 
====================================
*/
?>
<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&amp;#038;&amp;#038;" Has A Greater Precedence Than "and"
  */

  echo 2 + 4 * 5; // 22
  echo '<br>';
  echo (2 + 4) * 5; // 30
  echo '<br>';
  echo 10 || false || 0 || [] || ""; // True => 1
  echo '<br>';
  echo true; // 1
  echo '<br>';
  var_dump(10 || false || 0 || [] || ""); // True
  echo '<br>';
  echo 10 || false; // 1
  echo '<br>';

  $a = 10 || false; // $a = (10 || false) => $a = 1
  echo $a; // 1

  echo '<br>';

  $b = 10 or false; // ($b = 10) or false
  echo $b; // 10