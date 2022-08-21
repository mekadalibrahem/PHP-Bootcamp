<?php
/*
====================================
-- 015 - Variable Variable 
-- link : url Not Found 
====================================
*/
?>
<?php

  /*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */

  $a = "osama";
  $$a = "elzero";
  $$$a = "school";

  echo $a;
  echo "<br>";
  echo $$a;
  echo "<br>";
  echo $osama;
  echo "<br>";
  echo $$$a;
  echo "<br>";
  echo $elzero;
  echo "<br>";

  echo "Hello ${$a}"; // $$a
  echo "<br>";
  echo "Hello ${$$a}"; // $$$a