<?php 

/*
التكليف 07

    لديك Function تقوم بعمل جمع لرقمين
    المطلوب عدم التعديل على نوع الأرقام الموجودة في ال Parameters ولا الموجودة في ال Return
    يمكنك التعديل على ال Function نفسها للتأكد أن الرقم الذي سيرجع نوعه Double وليس Integer
    شاهد المثال لتفهم الفكرة

function calculate(int $num_one, int $num_two) {
  return $num_one + $num_two;
}

echo calculate(20, 10); // 30
echo gettype(calculate(20, 10)); // Double


*/


function calculate(int $num_one, int $num_two) : float{
    return $num_one + $num_two;
  }
  
  echo calculate(20, 10); // 30
  echo "<br>" ;
  echo gettype(calculate(20, 10)); // Double
  