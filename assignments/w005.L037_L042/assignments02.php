<?php 

/* 
التكليف 02

    لديك متغير index قيمته 0 لا تقم بالتعديل عليه
    نريد أن تطبع الأرقام الزوجية فقط تحت بعضها من رقم 2 وحتى رقم 20
    يجب عليك عمل ما سبق مرة بإستخدام ال While ومرة بإستخدام ال For ومرة بإستخدام ال Do While

$index = 0;

// Needed Output
2
4
6
8
10
12
14
16
18
20
*/

$index = 0;

while ($index <20) {
   
    $index+=2 ;
    echo "$index <br>" ;
}
echo "<hr>" ;
$index = 0;

do {
    $index+=2 ;
    echo "$index <br>";
    
} while ($index <20);
echo "<hr>" ;

for($index = 0 ; $index<=20 ;$index++){
if($index != 0 && ($index % 2 == 0)) echo "$index <br>";
}