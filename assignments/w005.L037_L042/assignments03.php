<?php 
/* 
التكليف 03

    لديك متغير num قيمته رقم 2 لا تقم بالتعديل عليه ولا على الشرط الموجود داخل ال While
    يجب عليك كتابة ال Code داخل ال Loop لتطبع الأرقام بنفس ال Pattern المطلوب

$num = 2;
while ($num < 520) {
  // Your Code Here
}

// Needed Output
1
4
10
22
46
94
190
382

*/

$num = 2;
// $start = 0 ;
while ($num < 520) {
    @$start = ($start > 0) ? $start : 0 ;
    if($start == 0 ){
        $result = 1; 
    }else{
        $result = ($start + 1 )* 2 ;
    }
   
    $start = $result ;
    echo $result . "<br>" ;
    $num += 65 ; 
}


