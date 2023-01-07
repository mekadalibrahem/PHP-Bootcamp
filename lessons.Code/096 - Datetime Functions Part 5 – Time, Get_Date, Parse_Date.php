<?php
/*
====================================
--096 - Datetime Functions Part 5 – Time, Get_Date, Parse_Date
-- link : https://youtu.be/IXLkZ12Ca7A
====================================
*/
?>
<?php

/*
  Date And Time Functions

  - time()
  --- Unix Timestamp => Seconds Since 01 Jan 1970

  - getdate()

  - date_parse()

*/

date_default_timezone_set("Africa/Cairo");

echo time() . "<br>";

echo time() / 60 . " Minutes<br>";
echo time() / 60 / 60 . " Hours<br>";
echo time() / 60 / 60 / 24 . " Days<br>";
echo time() / 60 / 60 / 24 / 365 . " Years<br>";

echo "<pre>";
print_r(getdate());
echo "</pre>";

$t = getdate();

echo $t["year"] . "<br>";

echo "<pre>";
print_r(date_parse("1985-2-31 5:25:15 UTC"));
echo "</pre>";