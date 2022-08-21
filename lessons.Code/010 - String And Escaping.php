<?php
/*
====================================
-- 010 - String And Escaping 
-- link : url Not Found 
====================================
*/
?>
<?php

  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = nl2br()
  ============================================
  */

  echo 'Hello PHP';
  echo '<br>';
  echo "Hello PHP";
  echo '<br>';
  echo "Hello 'PHP'";
  echo '<br>';
  echo 'Hello "PHP"';
  echo '<br>';
  echo 'Hello \'PHP\'';
  echo '<br>';
  echo "Hello \"PHP\"";
  echo '<br>';
  echo "Hello PHP\\";
  echo '<br>';
  echo 'Hello PHP
  On Multiple
  Lines';
  echo '<br>';
  echo nl2br('Hello PHP
  On Multiple
  Lines');