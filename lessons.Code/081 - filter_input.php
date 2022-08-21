<?php
/*
====================================
-- 081 - filter_input 
-- link : None 
====================================
*/
?>
<?php

  /*
    Filter Functions

    - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
  */

  // echo $_GET["num"];

  echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);

?>

<form action="" method="GET">
  <input type="text" name="num">
  <input type="submit" value="Send">
</form>