<?php
/*
====================================
-- 065 - Array Functions Part 3 [ 5 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    Array Functions

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array

  */

  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];

  echo '<pre>';
  print_r(array_keys($friends));
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, "Osama"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, 1, True));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_values($countries));
  echo '</pre>';

  $pad = ["A", "B", "C", "D"];

  echo '<pre>';
  print_r(array_pad($pad, 10, "@"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, -10, "@"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, 2, "@"));
  echo '</pre>';

  $product = [10, 5, 2, 10];

  echo array_product($product) . "<br>";

  $sum = [10, 5, 2, 10];

  echo array_sum($sum);