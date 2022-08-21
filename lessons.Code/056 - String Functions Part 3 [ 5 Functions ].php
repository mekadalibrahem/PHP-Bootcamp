<?php
/*
====================================
-- 056 - String Functions Part 3 [ 5 Functions ] 
-- link : None 
====================================
*/
?>
<?php

  /*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */

  echo chunk_split("Elzero Web School", 3, "@");
  echo '<br>';

  echo '<pre>';
  print_r(str_split("Elzero"));
  echo '</pre>';

  echo '<pre>';
  print_r(str_split("Elzero", 2));
  echo '</pre>';

  echo "<h3>Hello <b>Elzero</b></h3>";
  echo '<br>';

  echo strip_tags("<h3>Hello <b>Elzero</b></h3>");
  echo '<br>';

  echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3><b>");
  echo '<br>';

  echo nl2br("Elzero\nWeb\nSchool", false);