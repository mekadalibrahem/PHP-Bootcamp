<?php
/*
====================================
-- 008 - Type Casting 
-- link : url Not Found 
====================================
*/
?>
<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Type Casting
  = ----------------------
  = "boolean" or "bool"
  = "integer" or "int"
  = "float" or "double" or "real"
  = "string"
  = "array"
  = "object"
  = "null"
  = ------
  = Search For Settype
  ============================================
  */

  echo 5 + (int) "5 Lessons";
  echo '<br>';
  echo 5 + (integer) "5 Lessons";
  echo '<br>';
  echo 5 + ( integer ) "5 Lessons";
  echo '<br>';
  echo gettype(5 + (int) "5 Lessons");
  echo '<br>';
  echo 10 + 15.5;
  echo '<br>';
  echo 10 + (int) 15.5;
  echo '<br>';
  echo gettype(10 + (int) 15.5);
  echo '<br>';
  echo 10.5 + 10.5;
  echo '<br>';
  echo gettype(10.5 + 10.5);
  echo '<br>';
  echo (int) 10.5 + (int) 10.5; // 20
  echo '<br>';
  echo gettype((int) 10.5 + (int) 10.5);
  echo '<br>';
  echo (int) (10.5 + 10.5); // 21