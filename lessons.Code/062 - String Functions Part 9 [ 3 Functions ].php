<?php
/*
====================================
-- 062 - String Functions Part 9 [ 3 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */

  echo strstr("Elzero Web", "W") . "<br>"; // Web
  echo strstr("Elzero Web", "z") . "<br>"; // zero Web
  echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
  echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7


  echo strstr("Elzero Web", "w") . "<br>"; // False
  var_dump(strstr("Elzero Web", "w"));
  echo '<br>';


  echo stristr("Elzero Web", "w") . "<br>"; // Web
  var_dump(stristr("Elzero Web", "w")); // Web
  echo '<br>';

  echo 10_000_000;
  echo '<br>';

  echo number_format(10000000.156023);
  echo '<br>';
  echo number_format(10000000.156023, 3);
  echo '<br>';
  echo number_format(10000000.156023, 3, "@");
  echo '<br>';
  echo number_format(10000000.156023, 3, "@", "#");