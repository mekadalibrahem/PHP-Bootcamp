<?php
/*
====================================
-- 023 - Comparison Operators Part 2 
-- link : None 
====================================
*/
?>
<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 2
    - >     => Larger Than
    - >=    => Larger Than Or Equal
    - <     => Smaller Than
    - <=    => Smaller Than Or Equal
    - <=>   => Spaceship [Less Than, Equal Or Greater]

    Search
    - How Does PHP Compare Strings With Comparison Operators
  */

  var_dump(100 > 50);
  echo '<br>';
  var_dump(100 > 100);
  echo '<br>';
  var_dump(100 >= 100);
  echo '<br>';
  var_dump(100 >= 110);
  echo '<br>';
  var_dump(100 < 50);
  echo '<br>';
  var_dump(100 <= 50);
  echo '<br>';
  var_dump(100 <=> 200); // -1
  echo '<br>';
  var_dump(100 <=> 100); // 0
  echo '<br>';
  var_dump(100 <=> 50); // 1