<?php 
/* 
التكليف 04

    قم بإنشاء Function تقوم بضرب كل الأرقام التي تعطى لها ك Arguments في بعضها
    إذا كان ال Argument المستخدم في ال Function عبارة عن String لا تستعمله مع الأرقام
    إذا كان ال Argument عبارة عن Float قم بتحويله ل Integer قبل بدأ عملية الضرب

// Write Function Content Here

// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000

*/

function multiply(...$args){
    $mult = 1 ;
    foreach($args as $arg){
        if(is_string($arg) ) continue ;
        elseif(is_float($arg) ) $mult *= intval($arg) ;
        else $mult *= $arg ;  
    }
    return $mult ;
}

echo multiply(10, 20); // 200
echo "<br>";
echo multiply("A", 10, 30); // 300
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000
echo "<br>";