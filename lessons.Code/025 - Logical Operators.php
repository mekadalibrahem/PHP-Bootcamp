<?php
/*
====================================
-- 025 - Logical Operators 
-- link : None 
====================================
*/
?>
<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Logical Operators
    - Compare Conditions

    and => And => Two Are True
    &amp;&amp;  => And => Two Are True ["&amp;&amp;" Has A Greater Precedence Than "and"]
    or  => Or  => One Or Both Is True
    ||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    xor => Xor => One Is True But Not Both
    !   => Not => Not True
  */

  var_dump(100 > 50 and 100 > 80 and 100 > 90); // True
  echo '<br>';
  var_dump(100 > 50 &amp;&amp; 100 > 80 &amp;&amp; 100 > 100); // False
  echo '<br>';
  var_dump(100 > 50 or 100 > 110 or 100 > 100); // True
  echo '<br>';
  var_dump(100 > 50 xor 100 > 80);