<?php
/*
====================================
-- 027 - Array Operators 
-- link : None 
====================================
*/
?>
<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Array Operators
    - Deal With Arrays

    +     => Union
    ==    => Equal => Same Key And Value
    !=    => Not Equal
    <>    => Not Equal
    ===   => Identical => Same Key And Value, Same Order, Same Type
    !==   => Not Identical
  */

  $arr1 = [1 => "A", 2 => "B"];
  $arr2 = [3 => "C", 4 => "D"];
  $arr3 = $arr1 + $arr2;

  echo '<pre>';
  print_r($arr1 + $arr2);
  print_r($arr3);
  echo '</pre>';

  $arr4 = [1 => "10", 2 => "20"];
  $arr5 = [2 => 20, 1 => 10];

  var_dump($arr4 == $arr5); // True
  echo '<br>';
  var_dump($arr4 != $arr5); // False
  echo '<br>';
  var_dump($arr4 <> $arr5); // False
  echo '<br>';

  $arr6 = [1 => 100, 2 => 200];
  $arr7 = [1 => 100, 2 => 200];

  var_dump($arr6 === $arr7); // Give Me True