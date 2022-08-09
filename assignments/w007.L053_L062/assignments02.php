<?php 


/* 

التكليف 02

    لديك متغير يحتوي على كلمة ولا يمكن التعديل عليه
    نريد إستخدام 3 من ال Built In Functions لتخرج النتيجة المطلوبة
    يجب أن يتم إستخدامهم كلهم في نفس السطر
    لا يمكنك إضافة حروف ولا أرقام ولا أي شيء ويمكنك فقط إستعمال ال Built-In Functions

$str = "Orezle";

// Elzero
*/

$str = "Orezle";
$str = lcfirst($str);
$str = strrev($str);
$str = ucfirst($str);

echo $str ;// Elzero