<?php 

/* 
    التكليف 05 تحدي

    قم بإنشاء Function تطبع رسالة للمستخدم فيها إسمه وسنه وهل هو متاح للعمل أم لا
    ال Function تقبل ثلاثة Parameters الإسم والسن والحالة. وتكون أسمائهم a, b, c
    أنواع البيانات ستكون String للإسم و Number للسن و Boolean للحالة
    البيانات سوف يتم إستخدامها داخل ال Function بشكل عشوائي وليس لهم ترتيب معين
    البيانات غير مرتبة وليس لها إسم يعبر عنها يجب عليك طباعة الرسالة بناء على نوع البيانات لتكون رسالة منطقية.
    حالة العمل يمكن أن تكون True أو False وبناء عليها تتغير الرسالة
    لا تقم بالتعديل على ال Parameters ولا ال Arguments
    إستخدام ال Named Arguments غير مناسب حل التحدي
    شاهد الأمثلة لتفهم الفكرة

function check_status($a, $b, $c) {
  // Function Code Here
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

*/
function check_status($a ,$b , $c){
    $name = "" ; $age = 0 ; $isWork = false ; 
    foreach ([$a ,$b ,$c ] as $value) {
        if(is_string($value))  $name = $value ;
        elseif(is_bool($value)) $isWork = $value ;
        elseif(is_int($value)) $age = $value ;

    }
    return " Hello $name, Your Age Is $age, You Are " .( ($isWork) ?  ("Available") : ("Not Available") ). " For Hire";
}


echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>" ;
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>" ;
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>" ;
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo "<br>" ;
