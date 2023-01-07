<?php
/*
====================================
-- 092 - Datetime Functions Part 1 – Five Functions 
-- link : https://youtu.be/GBYN-FyFMKE 
====================================
*/
?>
<?php

/*
  Date And Time Functions

  - date_default_timezone_get()

  - date_default_timezone_set(timezone[Required])

  - date_create(Date/Time[Optional], Timezone[Optional])
  --- Time: Date/Time String || Current Time If NULL
  --- Timezone: Timezone String || Current Timezone

  - timezone_open(Timezone)

  - checkdate(M, D, Y) => All Required
  --- Validate A Gregorian Date

  Will Cover Later
  - date()
  - date_format()

*/

// Get Timezone

echo date_default_timezone_get() . "<br>";

// Print Date And Time

echo date("Y-m-d H:i:s") . "<br>";

// Change Timezone

date_default_timezone_set("Africa/Cairo");

// Print Date And Time Again

echo date("Y-m-d H:i:s") . "<br>";

// Get Timezone Again

echo date_default_timezone_get() . "<br>";

// Create Date Object

$d = date_create("", timezone_open("Indian/Antananarivo"));

// Echo Date With Format

echo date_format($d, "Y-m-d H:i:s");

// Check Date

echo "<br>";
var_dump(checkdate(10, 25, 1982));
echo "<br>";
var_dump(checkdate(31, 02, 1982));
echo "<br>";
var_dump(checkdate(31, 02, 3500));
echo "<br>";
var_dump(checkdate(-2, 02, 1982));
?>