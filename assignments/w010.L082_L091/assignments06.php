<?php 

/* 
التكليف التكليف 06

    لدينا ملف txt بإسم elzero.txt يحتوي على ثلاث سطور من النصوص
    نريد قراءة أول سطرين فقط وطباعتهم في الصفحة على سطر واحد
    لا نريد قراءة آخر سطر
    إستخدم ما تعلمته لتقوم بعمل هذا التكليف ب 4 طرق مختلفة
    شاهد محتوى الملف والنتيجة المطلوبة
    يجب أن تكون الحلول كلها تعمل في وقت واحد
    إذا إستخدمت ال fopen يجب أن تكون مرة واحدة فقط

// elzero.txt Content
Hello Elzero Web
School
No Need To Read

// Needed Output
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"


*/
$handle = fopen("elzero.txt", "r");


echo fread($handle, 24). "<br>";
rewind($handle);

echo fgets($handle); 
echo fgets($handle ) . "<br>"; 
rewind($handle);

fclose($handle);
echo  file_get_contents("./elzero.txt" , false  , null , 0 , 24);

echo "<br>";
$file =  file("elzero.txt");
echo $file[0] . " " .  $file[1] ;
echo "<br>";


echo "<br>";
