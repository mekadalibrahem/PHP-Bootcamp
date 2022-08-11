<?php 

/* 
التكليف 11

    لديك ال Array التالية
    بدون إستخدام أي Function جاهزة قم بحساب عدد عناصر ال Array

$arr = ["A", "B", "C", "D", "E"];

// Output
5

*/
$arr = ["A", "B", "C", "D", "E"];
function get_length_array($array) : int {
    $length  = 0 ;
    while ($array && current($array)) {
        $length++ ;
        next($array);
    }
    return $length ;
}
echo get_length_array($arr);





