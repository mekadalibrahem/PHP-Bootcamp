<?php
/*
====================================
-- 043 - Function Introduction And DRY Concept 
-- link : None 
====================================
*/
?>
<?php

  /*
    Function
    - Introduction And DRY Concept
    - Parameter
    - Argument
  */

  echo "Hello Mr Osama<br>";
  echo "Hello Mr Ahmed<br>";
  echo "Hello Mr Sayed<br>";

  function say_hello_to($someone) {
    echo "Hello Mr $someone<br>";
  }

  say_hello_to("Osama");
  say_hello_to("Ahmed");
  say_hello_to("Sayed");