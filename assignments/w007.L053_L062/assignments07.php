<?php 

/*
التكليف 07 تحدي

    لديك ال Array التالية تحتوي على أرقام وحروف
    لا نحتاج للأرقام في طباعة النتيجة
    إستخدم ما تعلمته لتخرج بالقيمة المطلوبة “Elzero”

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// Output
"Elzero"
*/


$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$str = "" ;
foreach ($chars as $key => $char) {
  if(ord($char) < 48 || ord($char) >57  ){
  
    $str .= $char ;
  }else{
    
  }
   
}
echo ucfirst(strtolower($str));
