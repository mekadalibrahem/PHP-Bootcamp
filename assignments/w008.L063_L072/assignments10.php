<?php 
/*
التكليف 10 تحدي

    لديك ال Arrays التالية
    المطلوب عند طباعة محتوى ال Array تظهر النتيجة كما في المثال بالأسفل
    إستخدم ما تعلمته لتخرج بالمطلوب
    ممنوع التعديل في ال Arrays الموجودة نهائيا
    ممنوع إستخدام أي أرقام نهائيا

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here

print_r($mix);

// Output
Array
(
  [0] => 1
  [1] => 2
  [2] => 3
  [3] => 4
  [4] => 5
  [5] => 6
  [6] => 7
  [7] => 8
  [8] => 9
)

*/
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
function remove_string($c){
    if(is_int($c)){
        return $c ;
    }
}
$mix  =  array_filter($mix, "remove_string");
$mix =  array_merge($mix , $nums );
sort($mix);
echo "<pre>" ;
print_r($mix);
echo "</pre>";