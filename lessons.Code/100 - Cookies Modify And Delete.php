<?php
/*
====================================
--100 - Cookies Modify And Delete 
-- link : https://youtu.be/Byptt4FBaR8
====================================
*/
?>
<?php

/*
  Cookies
  - Modify
  - Delete
  - Add Array
*/

setcookie("style[color]", "red");
setcookie("style[font]", "Tahoma");
setcookie("style[layout]", "boxed");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style"])) {
  echo $_COOKIE["style"]["font"];
}