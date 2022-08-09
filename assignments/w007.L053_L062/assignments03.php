<?php 

/* 
   التكليف 03

    لديك متغيرات تحتوي على أرقام وحروف لتساعدك في تنفيذ المطلوب
    لا يجب التعديل نهائيا على المتغيرات جميعها
    إستخدم قيم المتغيرات لتخرج بالنتيجة المطلوبة
    غير مسموح نهائيا بإستخدام اي شيء غير قيم المتغيرات المتاحة فقط
    نريد إستخدام 3 من ال Built In Functions لتخرج النتيجة المطلوبة
    يجب أن يتم إستخدامهم كلهم في نفس السطر

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here

// aaa_aaa_aaa_



*/


$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
$str =  str_repeat(implode(  [$str = strtolower($str) , $char]) , $num);
echo $str ;
// aaa_aaa_aaa_

