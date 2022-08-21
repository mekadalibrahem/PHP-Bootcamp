<?php 

/*
التكليف 07 

    لدينا ملف txt بإسم elzero2.txt يحتوي على سطرين من النصوص
    في أول سطر هناك كلمة Osamaa نريد تغييرها إلى Elzero

// elzero2.txt Content
Hello Osamaa Web
School

// elzero2.txt New Content
Hello Elzero Web
School
*/
$handle = fopen("elzero2.txt", "r+");
fseek($handle, mb_strlen("Hello ", "8bit"));
fwrite($handle , "Elzero");

fclose($handle);
  


