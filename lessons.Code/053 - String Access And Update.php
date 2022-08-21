<?php
/*
====================================
-- 053 - String Access And Update 
-- link : None 
====================================
*/
?>
<?php

  /*
    String
    - Access Elements
    --- String Is Array Of Characters
    --- Access Elements By Index "Zero Based Indexing"
    --- Negative Index Are Allowed
    - Update Elements
    --- Update Current Elements
    --- Add New Elements

    Search
    - Single-Byte and Multi-Byte
  */

  $str = "Elzero";

  echo "First Letter Is $str[0]<br>";
  echo "4th Letter Is $str[3]<br>";
  echo "Number Of Letters " . strlen($str) . "<br>";
  echo "Last Letter Is $str[-1]<br>";
  echo "Last Letter Is {$str[strlen($str) - 1]}<br>";

  echo $str . "<br>";
  $str[0] = "A";
  echo $str . "<br>";
  $str[6] = "A";
  echo $str . "<br>";