<?php
/*
====================================
--099 - How To Use Cookies Part 2 
-- link : https://youtu.be/CIH0q4M4bN0
====================================
*/
?>
<?php

/*
  Cookies

  - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
  --- Name
  --- Value
  --- Expire
  --- Path
  --- Domain
  --- Secure
  --- HTTP_Only

  Important
  - DO NOT Store Sensitive Information
  - Not Everything Saved To Cookies
*/

setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
setcookie("popup", "done", strtotime("+1 month"));

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo $_COOKIE["style"];