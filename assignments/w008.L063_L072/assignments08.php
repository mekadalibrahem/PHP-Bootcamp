<?php 

/*
التكليف التكليف 08

    لديك ال Array التالية
    المطلوب إضافة عنصر “D” لنهاية ال Array بأربع طرق مختلفة

$chars = ["A", "B", "C"];

// Output
Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
)
*/
$chars01 = ["A", "B", "C"];
$chars01[] ="D";
echo "<pre>";
print_r($chars01);
echo "</pre>";
$chars02 = ["A", "B", "C"];
array_push($chars02 ,"D");
echo "<pre>";
print_r($chars02);
echo "</pre>";
$chars03 = ["A", "B", "C"];
$chars03 = array_merge($chars03 , ["D"]);
echo "<pre>";
print_r($chars03);
echo "</pre>";

$chars04 = ["A", "B", "C"];
$chars04 = array_pad($chars04 , count($chars04)+1 , "D");
echo "<pre>";
print_r($chars04);
echo "</pre>";


