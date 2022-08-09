<?php 
/* 
التكليف 01

    لديك متغيرات تحتوي على أرقام وحروف لتساعدك في تنفيذ المطلوب
    لا يجب التعديل نهائيا على المتغيرات جميعها
    إستخدم قيم المتغيرات لتخرج بالنتيجة المطلوبة
    غير مسموح نهائيا بإستخدام اي شيء غير قيم المتغيرات المتاحة فقط

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here

echo $str; // Elzero
*/
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here
$str[$num_one] = $let_one ;
$str[(int)$num_two] = $let_two ;

echo $str; // Elzero