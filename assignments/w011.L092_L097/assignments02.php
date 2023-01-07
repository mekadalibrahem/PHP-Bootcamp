<?php 
/* 
التكليف 02

    لديك تاريخ مناسبة معينة ونريد طباعته بالشكل المطلوب
    قم بتغيير ال Time Zone لمدينة القاهرة في مصر
    في السطر الأول قم بطباعة ال Time Zone
    قم بزيادة 15 ساعة و 15 دقيقة و 15 ثانية على التاريخ الموجود
    في السطر الثاني قم بطباعة التاريخ كما في المثال

$date = "2005-10-02";

// Output Needed
"Africa/Cairo"
"2005, October, Sunday '02nd' 15:15:10"
*/


date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get();

echo "<br/>";
$date = "2005-10-02";
// way 01 

$d1 = date_create($date);
$new_date1 = date_add($d1 , date_interval_create_from_date_string("15 hour 15 Minutes  15 Seconds"));
echo date_format($new_date1,"Y, F ,l 'dS' H:i:s" );
echo "<br/>";

// way 02 
$d2 = date_create($date);
$new_date2 = date_modify($d2 , "+15 hour +15 Minutes  +15 Seconds");
echo date_format($new_date2,"Y, F ,l 'dS' H:i:s" );
echo "<br/>";


