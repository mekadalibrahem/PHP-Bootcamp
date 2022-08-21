<?php
/*
====================================
-- 017 - Predefined Variables And Test 
-- link : url Not Found 
====================================
*/
?>
<?php

  /*
    Pre-Defined Variables

    Search
    - PHP Pre-Defined Variables
  */

  // echo '<pre>';
  // print_r($_SERVER);
  // echo $_SERVER["HTTP_CONNECTION"];
  // echo '</pre>';

  echo $_GET["username"];

?>

<form action="" method="get">
  <input type="text" name="username">
  <input type="submit" value="Send">
</form>