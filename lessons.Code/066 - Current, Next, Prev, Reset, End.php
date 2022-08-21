<?php
/*
====================================
-- 066 - Current, Next, Prev, Reset, End 
-- link : None 
====================================
*/
?>
<?php

  /*
    Array Functions

    --- Every Array Has An Internal Pointer To Its "Current" Element
    --- Which Is Initialized To The First Element.
    --- Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer

    - current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element

  */

  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];

  echo current($friends) . "<br>"; // "Osama"
  echo next($friends) . "<br>"; // "Ahmed"
  echo current($friends) . "<br>"; // "Ahmed"
  echo next($friends) . "<br>"; // "Sameh"
  echo current($friends) . "<br>"; // "Sameh"
  echo prev($friends) . "<br>"; // "Ahmed"
  echo reset($friends) . "<br>"; // "Osama"
  echo current($friends) . "<br>"; // "Osama"
  echo end($friends) . "<br>"; // "Eman"
  echo current($friends) . "<br>"; // "Eman"