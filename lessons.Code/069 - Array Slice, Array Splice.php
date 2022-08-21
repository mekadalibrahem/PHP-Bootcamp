<?php
/*
====================================
-- 069 - Array Slice, Array Splice 
-- link : None 
====================================
*/
?>
<?php

  /*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Have String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position

  */


  $chars = ["A", "B", "C", "D", "E", "F", "G"];
  $chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
  $chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

  echo '<pre>';
  print_r(array_slice($chars, 2));
  print_r(array_slice($chars, -4));
  print_r(array_slice($chars, 2, 3));
  print_r(array_slice($chars, 2, -2));
  echo '</pre>';

  echo '<pre>';
  print_r(array_slice($chars_with_string_keys, 0, 2));
  print_r(array_slice($chars_with_numeric_keys, 0, 2));
  print_r(array_slice($chars_with_numeric_keys, 0, 2, True));
  echo '</pre>';

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $nums = [10, 20, 30, 40, 50, 60, 70];

  echo '<pre>';
  print_r(array_splice($nums, 2, 1, ["One", "Two"]));
  print_r($nums);
  echo '</pre>';