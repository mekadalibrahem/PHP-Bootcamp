<?php 

/*
التكليف 15 تحدي

    لديك ال Array التالية
    ممنوع إستخدام أي Function جاهزة لعمل المطلوب
    يمكنك فقط إستخدام رقم 0 مع ما تعلمته لتصل للمطلوب

$chars = ["o", "r", "e", "z", "l", "E"];

// Output
"Elzero"
*/
$chars = ["o", "r", "e", "z", "l", "E"];
function reverse_array($array){
    $reverse_array = [] ;
    if(current($array)){
        $reverse_array[] = end($array);
        while($array && prev($array)){
            $reverse_array[] = current($array);
        }
    }
    return $reverse_array ;
   
}
function array_to_string($array){
    $str = "" ;
    foreach($array as $item){
        $str .= $item ;
    }
    return $str; 
}

echo array_to_string(reverse_array($chars));
