<?php
/*
====================================
--098 - How To Use Cookies Part 1
-- link : https://youtu.be/8XUS9dnUK7g
====================================
*/
?>
<?php

/*
  Cookies

  - Examples
  --- Popup
  --- Custom Settings
  --- Remember Me => Login

  - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
  --- Name
  --- Value
  --- Expire
  --- Path
  --- Domain
  --- Secure
  --- HTTP_Only
*/

setcookie("style", "dark", time() + 60 * 60 * 24 * 30);