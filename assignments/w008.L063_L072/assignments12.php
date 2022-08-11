<?php 

/*
االتكليف 12

    لديك ال Array التالية
    بدون إستخدام أي Function جاهزة قم بحساب مجموع الأرقام الموجودة في ال Array

$nums = [11, 2, 10, 7, 20, 50];

// Output
100
*/
$nums = [11, 2, 10, 7, 20, 50];
function sum_array($array) : int {
    $length  = 0 ;
    while ($array && current($array)) {
        $length += current($array);
        next($array);
    }
    return $length ;
}

echo sum_array($nums);