<?php
/*
====================================
-- 041 - Break, Continue 
-- link : None 
====================================
*/
?>
<?php

  /*
    Control Structure
    - Loop

    Break, Continue
    - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
    - Skip Current Iteration
  */

  foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country == "USA") {

      break;

    }

    echo $country . "<br>";

  }

  echo "########## <br>";

  foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country == "USA") {

      continue;

    }

    echo $country . "<br>";

  }