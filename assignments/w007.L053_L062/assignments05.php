<?php 

/* 
   التكليف 05

    لديك مجموعة من المتغيرات لتساعدك في تنفيذ المطلوب
    يجب أن تستخدم ال Function المسماه substr_count لتخرج بالنتيجة الموجودة
    غير مسموح نهائيا بإستخدام اي شيء غير قيم المتغيرات المتاحة فقط
    في السطر الأول تستخدم ال Function لترجع برقم 1
    في السطر الثاني تستخدم ال Function لترجع برقم 2

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

// 1
// 2

*/

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str , $e , $four);
echo "<br>";
echo substr_count($str , strtolower($o) , ($four + $four) );
echo "<br>";

// 1
// 2