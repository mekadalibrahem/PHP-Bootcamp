<?php
/*
====================================
-- 016 - Assign By Value And By Reference 
-- link : url Not Found 
====================================
*/
?>
<?php

  /*
    Assign Variable By Reference
    - By Default, Variables Are Always Assigned By Value
    - Assigned By Reference Make Variable Alias Or Point To Another

    Search
    - References Are Not Pointers
  */

  $a = "Osama";
  $b = &amp;#038;$a;
  $b = "Elzero";
  $a = "School";

  echo $a;
  echo '<br>';
  echo $b;