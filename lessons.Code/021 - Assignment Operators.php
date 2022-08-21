<?php
/*
====================================
-- 021 - Assignment Operators 
-- link : None 
====================================
*/
?>
<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Assignment Operators
    - Used To Write Value To Another

    - $a [+=]  $b => Addition
    - $a [-=]  $b => Subtraction
    - $a [*=]  $b => Multiplication
    - $a [/=]  $b => Division
    - $a [%=]  $b => Modulus
    - $a [**=] $b => Exponentiation
  */

  $a = 10;
  // $a = $a + 20;
  $a += 20;

  $b = 20;
  // $b = $b - 5;
  $b -= 5;

  $c = 4;
  // $c = $c ** 4;
  $c **= 4;

  echo $a;
  echo '<br>';
  echo $b;
  echo '<br>';
  echo $c;