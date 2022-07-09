<?php 
/* 
    التكليف 04

    إستبدل علامة الإستفهام بواحد من ال Comparison Operators لتكون النتيجة دائما True
    يجب عدم إستخدام ال Operator أكثر من مرة

$a = 10;
$b = 20;
$c = 15;

var_dump($a ? $b); // True
var_dump($c ? $a); // True
var_dump($a ? $b); // True
var_dump($a ? $b); // True
var_dump($a ? $c); // True
var_dump($a ? $c); // True
var_dump(gettype($a) ? gettype($b)); // True
var_dump(gettype($a) ? gettype($b)); // True
var_dump(gettype((float) $a) ? gettype($b)); // True

*/
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <= $b); // True
var_dump($a != $b); // True
var_dump($a <> $c); // True
var_dump($a !== $c); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(!(gettype($a) <> gettype($b))); // True
var_dump(gettype((float) $a) !== gettype($b)); // True

?>