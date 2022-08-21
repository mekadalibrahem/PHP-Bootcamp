<?php
/*
====================================
-- 064 - Array Functions Part 2 [ 5 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    Array Functions

    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists

  */

  $family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];

  echo '<pre>';
  print_r($family);
  print_r(array_reverse($family, True));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_flip($countries));
  echo '</pre>';

  $counting = [
    "A",
    "B",
    "C",
    [1, 2, 3]
  ];

  echo count($counting, 1);

  echo '<br>';

  $search = ["1", 2, 3, 4];

  if (in_array(1, $search, True)) {
    echo "The Element Is Found";
  }

  echo '<br>';

  $courses = [
    "Javascript" => 95,
    "PHP" => 100,
    "HTML" => 60,
    "CSS" => 65
  ];

  if (array_key_exists("PHP", $courses)) {
    echo "The Course Is Found And The Price Is: " . $courses["PHP"];
  }