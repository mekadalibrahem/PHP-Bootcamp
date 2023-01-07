<?php 

/* 
التكليف 03

    لديك تاريخ مناسبة معينة
    قم بتغيير ال Time Zone لمدينة القاهرة في مصر
    قم بطباعة السطرين كما في المثال
    نريد حساب عدد الأيام والسنين من بداية الوقت حتى التاريخ الموجود
    قم بعمل المطلوب بدون إستخدام Date_Diff Function

$date = "1990-10-01";

// Output Needed
"From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
"From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"

*/
date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";
$old_date = strtotime($date) ;
$t = time() ;
$diff = ($t - $old_date )   ;


$diff_day =  $diff / 60 / 60 / 24 ;
$diff_years = $diff / 60 / 60 / 24 / 365 ;

echo "From Epoch Time Till 1990-10-01 Is Approximately " .round($diff_day,1)   . " Days";
echo "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " .round($diff_years,1)   . " Years";

