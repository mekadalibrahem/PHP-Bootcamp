<?php
/*
====================================
-- 057 - String Functions Part 4 [ 5 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */

  var_dump(strpos("Hello Hello", "H")); // 0
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 3)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 6)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "h")); // False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -2)); // False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -5)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -11)); // 0
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H")); // 6
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H", 5)); // 6
  echo '<br>';
  var_dump(stripos("Hello Hello", "h")); // 0
  echo '<br>';
  var_dump(strripos("Hello Hello", "h")); // 6
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He")); // 2
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1)); // 1
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
  echo '<br>';
  var_dump(substr_count("abcdabcda", "abcda")); // 1