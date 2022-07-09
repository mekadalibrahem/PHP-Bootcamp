<?php 

/* 
التكليف 07

    لديك متغيريين يحتوا على رقمين ومتغير يخص العلامة الحسابية
    العلامة الحسابية يمكن أن تكون واحدة من أربعة + – * /
    قم بعمل شروط تقوم بالعملية الحسابية على الرقمين بناء على العملية المكتوبة
    إذا قمت بكتابة علامة حسابية غير الأربعة الموجودين تظهر لك رسالة كما في الأمثلة
    إذا كانت العلامة الحسابية هي القسمة قم بطباعة الرقم بدون كسور في السطر الأول وفي السطر الثاني باقي القسمة
    شاهد كل Test Case والنتيجة الخاصة بها

$num_one = 23;
$num_two = 5;
$op = "+";

// + Operator

// Output
28

// - Operator

// Output
18

// / Operator

// Output
4
3

// * Operator

// Output
115

// Anything Else

// Output
"Unknown Operation"

*/

$num_one = 23;
$num_two = 5;
$op = "+";

switch ($op) {
    case '+':
       echo $num_one + $num_tow ;
        break;
    case '-':
        echo $num_one - $num_tow ;
        break;
    case '*':
        echo $num_one * $num_tow ;
        break;
    case '/':
        if($num_tow  != 0 ){
            echo intval($num_one / $num_tow) ;
            echo $num_one % $num_tow ;
        }else{
            echo " Mathmatic Error : Can not  / by zero" ;
        }
        
        break;
    
    default:
        echo "Unknown Operation" ;
        break;
}