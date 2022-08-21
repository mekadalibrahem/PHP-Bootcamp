<?php
/*
====================================
-- 045 - Function Return vs Echo 
-- link : None 
====================================
*/
?>
<?php

  /*
    Function
    - Optional Return &amp;#038; Null
    - End After Return
  */

  $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

  function get_number($num_one, $num_two) {
    return $num_one + $num_two;
    echo "Will Not Echo Anything";
  }

  // get_number(2, 1); // 3
  // echo $prizes[3]; // "Apple TV"
  // $prize_number = get_number(2, 1);
  // var_dump($prize_number);
  // echo $prizes[];

  // $prize_number = get_number(2, 1);
  // var_dump($prize_number);

  echo $prizes[get_number(2, 1)];