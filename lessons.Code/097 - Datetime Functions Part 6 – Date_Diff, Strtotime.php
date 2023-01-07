<?php
/*
====================================
--097 - Datetime Functions Part 6 – Date_Diff, Strtotime 
-- link : https://youtu.be/X2H2Oe1qf3A
====================================
*/
?>
<?php

  /*
    Date And Time Functions

    - date_diff()
    - strtotime(DateTime, Base)

  */

  date_default_timezone_set("Africa/Cairo");

  $reg = date_create("2022-01-09");
  $now = date_create("now");

  $diff = date_diff($reg, $now);

  echo '<pre>';
  print_r($diff);
  echo '</pre>';

  echo "You Are A Member For " . $diff->days . " Days<br>";

  echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
  echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
  echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
  echo date("Y-m-d M D H:i:s", strtotime("tomorrow", strtotime("1982-10-25"))) . "<br>";