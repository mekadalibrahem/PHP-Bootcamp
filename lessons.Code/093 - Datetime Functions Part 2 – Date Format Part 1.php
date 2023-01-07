<?php
/*
====================================
--093 - Datetime Functions Part 2 – Date Format Part 1
-- link : https://youtu.be/Mh71lcRU0FM 
====================================
*/
?>
<?php

/*
  Date And Time Functions

  - date_format()

  [Year]
  - Y => Four Digits
  - y => Two Digits

  [Month]
  - m => 01-12
  - M => Text Month => 3 Letters
  - F => Full Text
  - t => Number Of Days In This Month

  [Day]
  - d => Day of The Month 1-31
  - j => Day Without Leading Zero
  - D => Text Day => 3 Letters
  - l => Full Text
  - z => Day Of The Year 0-365
  - S => st, rd, nth Suffix For Day Of The Month

  [Time]
  - a => Small am/pm
  - A => Capital AM/PM

  [Hour]
  - g => 1-12
  - h => 01-12
  - G => 0-23
  - H => 00-23

  [Minutes, Seconds, Micro]
  - i => 00-59
  - s => 00-59
  - u => Microseconds

*/

date_default_timezone_set("Africa/Cairo");

// $d = date_create("2022-10-01 15:5:3");
$d = date_create();

// Year
echo date_format($d, "Y") . "<br>"; // 2022
echo date_format($d, "y") . "<br>"; // 22

// Month
echo date_format($d, "Y-m") . "<br>";
echo date_format($d, "Y-M") . "<br>";
echo date_format($d, "Y-F") . "<br>";
echo date_format($d, "t") . "<br>"; // 30

// Day
echo date_format($d, "Y-m-d") . "<br>";
echo date_format($d, "Y-m-j") . "<br>";
echo date_format($d, "Y-m-D") . "<br>";
echo date_format($d, "Y-m-l") . "<br>";
echo date_format($d, "Y-m-l z") . "<br>";
echo date_format($d, "Y-m-l djDl") . "<br>";
echo date_format($d, "Y-m-l S") . "<br>";
?>