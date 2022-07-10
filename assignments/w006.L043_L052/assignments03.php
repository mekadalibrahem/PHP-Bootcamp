<?php 

/* 
    التكليف 03

    قم بإنشاء Function تقوم بجمع كل الأرقام التي تعطى لها ك Arguments
    إذا وجدت في الأرقام رقم 5 لا تجمعه مع الأرقام
    إذا وجدت في الأرقام رقم 10 غير قيمته إلى 20 وأكمل العملية الحسابية كما هي
    شاهد المثال لتفهم الفكرة

// Write Function Content Here

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40

*/

function sum_all(...$numbers){
    $sum = 0 ; 
    foreach ($numbers as  $number) {
      if($number == 5) continue ; 
      elseif($number == 10) $sum += 20 ;
      else $sum += $number ;
    }
    return $sum ."<br>" ;
}
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
