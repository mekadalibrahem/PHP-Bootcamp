<?php
/*
====================================
-- 047 - Function Variable Arguments List 
-- link : None 
====================================
*/
?>
<?php

  /*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax In JS
  */

  function calculate(...$nums) {
    // echo "Number Of Arguments: " . func_num_args() . "<br>";
    // echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
    // print_r(func_get_args());
    // $result = 0;
    // foreach (func_get_args() as $arg) :
    //   $result += $arg;
    // endforeach;
    // echo $result;
    echo "Argument Index Number 3 Is " . $nums[3] . "<br>";
    print_r($nums);
    $result = 0;
    foreach ($nums as $num) :
      $result += $num;
    endforeach;
    echo $result;
  }

  calculate(10, 20, 50, 30, 40, 50, 100);