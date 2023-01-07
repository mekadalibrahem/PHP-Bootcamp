<?php 
/* 
التكليف التكليف 04

    قم بعمل نفس ما سبق بإستخدام Date_Diff Function

$date = "1990-10-01";

// Output Needed
"From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
"From Epoch Time Till 1990-10-01 Is Approximately 20 Years"
*/

date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";

$reg = date_create($date);
$now = date_create("now");

$diff = date_diff($reg, $now);

echo '<pre>';
print_r($diff);
echo '</pre>';

echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->days  . " Days";
echo "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . $diff->y   . " Years";

