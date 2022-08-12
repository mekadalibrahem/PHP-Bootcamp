<?php 
/*

التكليف 05

    لديك مجموعة من الروابط في متغيرات
    المطلوب إستخدام ال If Condition المختصرة للتأكد من الروابط صالحة أم لا Valid Or Not Valid
    ثم بعد ذلك تطبع النتيجة. شاهد المثال لتفهم الفكرة

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

// Output
"Not A Valid URL"
"Not A Valid URL"
"A Valid URL"
"Not A Valid URL"

*/


$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";



// print_r(filter_list());
echo  filter_var($url1 ,filter_id("validate_url")) ?  "A Valid URL" :  "Not A Valid URL" ;
echo "<br>";
echo  filter_var($url2 ,filter_id("validate_url")) ?  "A Valid URL" :  "Not A Valid URL" ;
echo "<br>";

echo  filter_var($url3 ,filter_id("validate_url")) ?  "A Valid URL" :  "Not A Valid URL" ;
echo "<br>";

echo  filter_var($url4 ,filter_id("validate_url")) ?  "A Valid URL" :  "Not A Valid URL" ;
echo "<br>";



