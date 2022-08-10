<?php 


/* 
التكليف 02

    لديك Two Arrays
    المطلوب إستخدام ال Array Built-In Functions لتخرج بال Output المطلوب

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

// Output
Array
(
  [h] => HTML
  [c] => CSS
  [j] => JavaScript
)
*/
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo "<pre>" ;
print_r(array_change_key_case(array_combine($codes, $means)));
echo "</pre>";

