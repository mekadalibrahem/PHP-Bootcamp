<?php
/*
====================================
-- 061 - String Functions Part 8 [ 4 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */

  $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

  echo strlen($str) . "<br>";

  echo wordwrap($str, 8, "<br>", True);

  echo "<br>";

  echo ord("a"); // 97

  echo "<br>";

  echo chr(97); // a

  echo "<br>";

  echo similar_text("Elz@ero", "Elz_eroo");

  echo "<br>";

  echo similar_text("Elzero", "Elzeroo", $perc);

  echo "<br>";

  echo $perc;