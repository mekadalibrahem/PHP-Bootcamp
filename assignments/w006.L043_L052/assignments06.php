<?php 

/* 
التكليف 06

    قم بعمل Function تقوم بعمل عمليات حسابية بإسم calculate
    العمليات الحسابية هي الجمع والطرح والقسمة
    ال Function تقبل ثلاثة Parameters الرقم الأول والرقم الثاني ونوع العملية الحسابية وقم بتسميتهم كما تريد
    كل ما عليك هو تنفيذ العملية الحسابية بناء على المدخلات
    في حالة قام الشخص بكتابة نوع العملية الحسابية خطأ تظهر له رسالة أنه لا توجد هذه العملية
    العمليات الحسابية المتاحة هي add, subtract, multiply
    يمكن للشخص كتابة أول حرف فقط من العملية الحسابية فمثلا subtract يمكن أن يكتب s
    إذا لم يكتب الشخص العملية الحسابية نهائيا قم بعمل العملية الإفتراضية وهي الجمع

// Write Function Content Here

// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
*/


function calculate($num1 , $num2  , $op = "a"){
    switch($op){
        case "a" :
        case "add" :
            return $num1 + $num2 ; 
            break; 
        case "m" :
        case "multiply" :
            return $num1 * $num2 ; 
            break;
        case "s" :
        case "subtract" :
            return $num1 - $num2 ; 
            break;
        default :
        return "unknone operation"  ;
        break ;
    }
}

echo calculate(10, 20); // 30
echo "<br>";

echo calculate(10, 20, "a"); // 30
echo "<br>";

echo calculate(10, 20, "s"); // -10
echo "<br>";

echo calculate(10, 20, "subtract"); // -10
echo "<br>";

echo calculate(10, 20, "multiply"); // 200
echo "<br>";

echo calculate(10, 20, "m"); // 200