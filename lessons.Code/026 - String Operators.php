<?php
/*
====================================
-- 026 - String Operators 
-- link : None 
====================================
*/
?>
<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    String Operators
    - Concatenate Strings

    .
    .=
  */

  define("ELZERO", "1");

  $a = "Elzero";
  $b = "Web";
  $c = "School";

  echo "$a $b $c";
  echo '<br>';
  echo "{$a} {$b} {$c}";
  echo '<br>';
  echo $a . " " . $b . " " . $c;
  echo '<br>';
  echo "{$a} {$b} {$c} " . ELZERO . " " . testing();
  echo '<br>';

  function testing() {
    return 1;
  }

  $x = "Elzero ";
  $x .= "Web"; // $x = $x . "Web" => Elzero Web
  $x .= " School"; // $x = $x . "School" => Elzero Web School

  echo $x;