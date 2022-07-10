<?php 
/* 
التكليف 01

    قم بإنشاء Function تقوم بالترحيب بالأشخاص
    ال Function تقبل إثنين Paramaters وهم إسم الشخص ونوعه
    بناء على نوع الشخص تكتب له ال Title المناسب Mr For Male, Miss For Female
    إذا لم يكتب النوع لا تكتب أي Title قبل الإسم
    شاهد المثال لتفهم الفكرة

// Write Function Content Here

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh

*/


function greeting($name , $type = "privte"){
    switch ($type) {
        case "Female":
            return "Hello Miss $name <br>" ;
            break;
        case "Male" :
            return "Hello Mr $name <br>";
        
        default:
            return "Hello $name <br>";
            break;
    }
}

echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh


