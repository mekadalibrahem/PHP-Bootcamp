<?php 
/* 
التكليف 04

    لديك ال Array التالية
    المطلوب إستخدام ال Array Built-In Functions لتخرج بال Output المطلوب
    يجب عمل الحل مرة بواسطة ال Array_Reduce مع إستخدام Anonymous Function
    ثم عمله مرة أخرى بوسيلة أخرى

$nums = [10, 20, 30];

// Output
60
60
*/


$nums = [10, 20, 30];
echo array_reduce($nums , fn( $c,$i) =>   $c + $i );
echo "<br>";
echo array_sum($nums);
echo "<br>";


function sum(...$item){
    $sum = 0 ;
    foreach ($item as  $value) {
       $sum +=  $value ; 
    }
    return $sum ;
}
echo sum(...$nums);