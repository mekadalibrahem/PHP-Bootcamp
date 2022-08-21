<?php
/*
====================================
-- 077 - filter_list, filter_id, filter_var 
-- link : None 
====================================
*/
?>
<?php

  /*
    Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
  */

  echo "<pre>";
  print_r(filter_list());
  echo "</pre>";

  echo filter_id("boolean") . "<br>"; // 258

  $val = "on"; // True || 1 || "yes" || "on"

  if (filter_var($val, FILTER_VALIDATE_BOOL)) { // Or ID "258"

    echo "This Is True";

  } else {

    echo "This Is False";

  }