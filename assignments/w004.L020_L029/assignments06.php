<?php 

/* 

التكليف 06

    لديك المتغيرات التالية تحتوي على كلمات لتكوين إسم قناة Elzero Web School
    ولديك المتغير الأخير d الذي تقوم بكتابته ليطبع لك الإسم كاملا بمسافة بين الكلمات
    المطلوب إستخدام ال Concatenation وكل ما تعلمته سابقا ليكون محتوى المتغير الأخير d هو جميع المتغيرات بمسافة بينهم
    المطلوب عمل الطلب السابق ب 4 طرق مختلفة

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
// $d = ???;

// Method Two
// $d = ???;

// Method Three
// $d = ???;

// Method Four
// $d = ???;

echo $d; // Elzero Web School

*/

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// Method Two
$d = $a . " " . $b . " " . $c;

// Method Three
$d = "${a} ${b} ${c}";

// Method Four
$d = "" ;
$d .= $a . " "  ;
$d .= $b . " "  ;
$d .= $a  ;

echo $d; // Elzero Web School


?>