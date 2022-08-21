<?php
/*
====================================
-- 071 - Array Map, Array Filter 
-- link : None 
====================================
*/
?>
<?php

  /*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

  */

  function add_title($fname, $lname) {
    return "Hello Mr $fname $lname";
  }

  // echo add_title("Osama");

  $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

  echo '<pre>';
  print_r(array_map("add_title", $first_names, $last_names));
  print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
  echo '</pre>';

  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];

  function check_nums($n1, $n2) {
    return $n1 > 4 || $n2 > 4;
  }

  echo '<pre>';
  print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
  echo '</pre>';