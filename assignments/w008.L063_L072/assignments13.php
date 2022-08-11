<?php 

/*
التكليف 13

    لديك ال Array التالية
    بدون إستخدام أي Function جاهزة مطلوب إيجاد أكبر عنصر في ال Array

$nums = [10, 100, -20, 50, 30];

// Output
100
*/

$nums = [10, 100, -20, 50, 30];

function big_number($num1 , $num2){
    if($num1>=$num2){
        return $num1 ;
    }else{
        return $num2 ;
    }
}

function max_array($array){
    $max =current($array);
    while ($array && current($array) ) {
       $max = big_number($max , next($array));

    }
    return $max ;
}

echo max_array($nums);

