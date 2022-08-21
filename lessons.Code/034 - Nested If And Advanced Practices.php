<?php
/*
====================================
-- 034 - Nested If And Advanced Practices 
-- link : None 
====================================
*/
?>
<?php

  /*
    Control Structure
    - Nested If Condition And Training
  */

  $name = "Osama";
  $is_student = true;
  $is_orphan = true;
  $country = "Egypt";
  $country_discount = 50;
  $price = 100;
  $student_discount = 10;
  $orphan_discount = 15;

  if ($country == "Egypt") {

    if ($is_student == true) {

      if ($is_orphan == true) {

        echo "Hello $name";
        echo "<br>";
        echo "Country Discount $country_discount";
        echo "<br>";
        echo "Student Discount $student_discount";
        echo "<br>";
        echo "Orphan Discount $orphan_discount";
        echo "<br>";
        echo "The Final Price Is " . $price - $country_discount - $student_discount - $orphan_discount;

      } else {

        echo "Hello $name";
        echo "<br>";
        echo "Country Discount $country_discount";
        echo "<br>";
        echo "Student Discount $student_discount";
        echo "<br>";
        echo "The Final Price Is " . $price - $country_discount - $student_discount;

      }

    } else {

      echo "Hello $name";
      echo "<br>";
      echo "Country Discount $country_discount";
      echo "<br>";
      echo "The Final Price Is " . $price - $country_discount;

    }

  } else {

    echo "Hello $name";
    echo "<br>";
    echo "No Discount";
    echo "<br>";
    echo "The Final Price Is $price";

  }