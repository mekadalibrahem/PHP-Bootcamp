<?php
/*
====================================
-- 068 - Array Shift, Array Pop, Array Push, Array Unshift 
-- link : None 
====================================
*/
?>
<?php

  /*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */


  $chars = ["A", "B", "C", "D"];

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $first = array_shift($chars);

  echo "$first<br>"; // "A"

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $last = array_pop($chars);

  echo "$last<br>"; // "D"

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_push($chars, "X", "Y", "Z");

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_push($chars, "1");

  $chars[] = "1";

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_unshift($chars, "One", "Two", "Three");

  echo '<pre>';
  print_r($chars);
  echo '</pre>';