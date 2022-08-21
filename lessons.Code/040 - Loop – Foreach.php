<?php
/*
====================================
-- 040 - Loop – Foreach 
-- link : None 
====================================
*/
?>
<?php

  /*
    Control Structure
    - Loop

    Foreach
  */

  $countries = ["EG", "SA", "QA", "SY"];

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  foreach ($countries as $country) {

    echo $country . "<br>";

  }

  $countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

  echo '<pre>';
  print_r($countries_with_discount);
  echo '</pre>';

  foreach ($countries_with_discount as $country => $discount) :

    echo "Country Name Is $country And Discount Is $discount <br>";

  endforeach;