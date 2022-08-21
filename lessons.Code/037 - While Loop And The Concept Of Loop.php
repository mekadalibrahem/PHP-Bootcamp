<?php
/*
====================================
-- 037 - While Loop And The Concept Of Loop 
-- link : None 
====================================
*/
?>
<?php

  /*
    Control Structure
    - Loop

    While
  */

  // echo "1<br>";
  // echo "2<br>";
  // echo "3<br>";
  // echo "4<br>";
  // echo "5<br>";

  // echo "1<br>2<br>3<br>4<br>5<br>";

  $i = 1;

  while ($i <= 3) {

    echo "$i<br>";

    $i++;

  }

  $a = 1;

  while ($a <= 3) :

    echo "$a<br>";

    $a++;

  endwhile;