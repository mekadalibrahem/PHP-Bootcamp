<?php 

/*

التكليف 14

    لديك ال Array التالية
    بدون إستخدام أي Function جاهزة مطلوب إيجاد أصغر عنصر في ال Array

$nums = [10, 100, -20, 50, 30];

// Output
-20
*/

$nums = [10, 100, -20, 50, 30];

function min_number($num1 , $num2){
    if($num1<=$num2){
        
        return $num1 ;
    }else{
      
        return $num2 ;
    }
}

function min_array($array){
    $min =current($array);
    while ($array && next($array) ) {
        
        $min = min_number($min , next($array));

    }
    return $min ;
}

echo min_array($nums);



