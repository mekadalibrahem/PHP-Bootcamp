<?php 

/*
التكليف 16

    لديك ال Array التالية
    إستخدم ما تعلمته لتقوم بعمل المطلوب
    المطلوب عدم عرض ال Strings
    طباعة الأرقام الفردية فقط
    ترتيب الأرقام

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

// Output
Array
(
  [0] => 1
  [1] => 3
  [2] => 5
  [3] => 7
)

*/
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

function remove_string($c){
    if(is_int($c)){
        return $c ;
    }
}
function odd_number_filter($c){
    if($c %2 != 0 ){
        return $c ;
    }
}
$mix  = array_filter($mix, "remove_string");
$mix = array_filter( $mix, "odd_number_filter");
sort($mix);
echo "<pre>";
print_r($mix);
echo "</pre>";




