<?php 

/* 
   التكليف 05

    إبحث عن أربع طرق لطباعة إسم الملف الحالي مع الإمتداد
    شاهد النتيجة في الأسفل

// Output

"index.php"
"index.php"
"index.php"
"index.php"

*/
echo basename(__FILE__) ."<br>";
echo pathinfo(__FILE__ , PATHINFO_BASENAME) ."<br>";

echo basename($_SERVER["SCRIPT_FILENAME"]) ."<br>";
echo basename($_SERVER['PHP_SELF'])  ."<br>";

