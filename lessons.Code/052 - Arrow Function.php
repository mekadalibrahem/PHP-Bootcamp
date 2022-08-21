<?php
/*
====================================
-- 052 - Arrow Function 
-- link : None 
====================================
*/
?>
<?php

  /*
    Function
    - Arrow Function
    --- Short Syntax For Anonymous Function
    --- Automatic Use Variables From Parent Scope

    - Syntax
    --- Function Replaces With fn
    --- No Need For Curly Braces
    --- Return Is Omitted
  */

  // Arrow Function In Variable

  $say_hello = fn() => "Hello";

  echo $say_hello();

  echo '<br>#########<br>';

  // Arrow Function With Parameter In Variable

  $say_hola = fn($someone) => "Hola $someone";

  echo $say_hola("Osama");

  echo '<br>#########<br>';

  // Arrow Inherit Variable From Parent Scope Is Automatic

  $msg = "Hi";

  $say_hi = fn($someone) => "$msg $someone";

  echo $say_hi("Osama");

  echo '<br>#########<br>';

  // Pass Arrow Function To Function => array_map

  $nums = [10, 20, 30, 40, 50];

  $nums_after_adding_ten = array_map(fn($item) => $item + 10, $nums);

  echo '<pre>';
  print_r($nums_after_adding_ten);
  echo '</pre>';