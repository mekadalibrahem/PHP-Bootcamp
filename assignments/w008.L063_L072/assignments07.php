<?php 

/*
التكليف 07

    لديك ال Array التالية
    المطلوب كتابة أسطر ال Code في المكان المخصص لتتم طباعة النتيجة المطلوبة
    يجب عدم التعديل على السطور المكتوبة ولا على ال Array
    يجب عدم كتابة سطور أكثر من المطلوبة

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
// Write Line Here

echo current($names) . "<br>"; // "Sayed"

// Write Line Here

echo current($names) . "<br>"; // "Ali"

// Write Line Here

echo current($names) . "<br>"; // "Osama"

// Write Line Here
// Write Line Here

echo current($names) . "<br>"; // "Mahmoud"
*/

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names);
next($names);
// Write Line Here

echo current($names) . "<br>"; // "Sayed"

// Write Line Here
end($names);

echo current($names) . "<br>"; // "Ali"

// Write Line Here
reset($names);

echo current($names) . "<br>"; // "Osama"

// Write Line Here
end($names);

// Write Line Here
prev($names);
echo current($names) . "<br>"; // "Mahmoud"