<?php 

/* 
التكليف 60

    لديك مجموعة من الروابط في متغيرات
    المطلوب تنقية الروابط لتكون سليمة وصالحة
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

echo  filter_var($url1 ,FILTER_SANITIZE_URL) ?  "A Valid URL" :  "Not A Valid URL" ;
echo "<br>";
echo  filter_var($url2 ,FILTER_SANITIZE_URL) ?  "A Valid URL" :  "Not A Valid URL" ;
echo "<br>";

echo  filter_var($url3 ,FILTER_SANITIZE_URL) ?  "A Valid URL" :  "Not A Valid URL" ;
echo "<br>";

echo  filter_var($url4 ,FILTER_SANITIZE_URL) ?  "A Valid URL" :  "Not A Valid URL" ;
echo "<br>";

