<?php
/*
====================================
-- 024 - Increment And Decrement Operators 
-- link : None 
====================================
*/
?>
<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Incrementing &amp;#038; Decrementing Operators
    - Increase And Decrease Values
  */

  $likes = 0;
  $likes++;
  $likes++;
  $likes++;
  $likes--;

  echo $likes; // 2
  echo '<br>';

  $a = 0;

  echo $a--; // 0
  echo '<br>';
  echo $a; // -1
  echo '<br>';

  $b = 0;

  echo --$b; // -1
  echo '<br>';
  echo $b; // -1