<?php
/*
====================================
-- 058 - String Functions Part 5 [ 4 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */

  parse_str("name=Osama&amp;#038;email=o@nn.sa&amp;#038;os=mac", $query);

  echo '<pre>';
  print_r($query);
  echo '</pre>';

  echo $query["name"] . "<br>";
  echo $query["email"] . "<br>";
  echo $query["os"] . "<br>";

  echo "Hello [] () * + . <br>";
  echo quotemeta("Hello [] () * + . <br>");

  echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";

  echo strtr("E@zero Web Schoo@", "@", "l");

  echo "<br>";

  $translation = ["@" => "l", "#" => "o"];

  echo strtr("E@zer# Web Sch##@", $translation);