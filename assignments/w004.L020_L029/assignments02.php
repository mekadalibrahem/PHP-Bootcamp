<?php 

/*
    التكليف 02

    لديك المتغير التالي قيمته 10 ونوعه String وبداخله رقم
    المطلوب طباعة الرقم ك Integer وفي السطر الذي يليه تطبع نوعه لتتأكد أنه Integer
    المطلوب تكرار ما سبق ب 3 طرق مختلفة
    إذا كنت ممن يحب أن يسبق الدورة التعليمية وتحب البحث كثيرا قم بعمل ما سبق بطريقتين إضافيتين ليصبح المجموع 5 طرق

        $a = "10";

        // Needed Ouput
        10
        "integer"
        10
        "integer"
        10
        "integer"

        // For The People Who Love Searching
        10
        "integer"
        10
        "integer"
 */
$a = "10";
echo +$a ;
echo "<br>" ;
echo gettype(+$a);
echo "<br>" ;
echo ($a * 1) ;
echo "<br>" ;
echo gettype(($a * 1));
echo "<br>" ;
echo (($a / 1 ) ) ;
echo "<br>" ;
echo gettype(($a  /1 ));
echo "<br>" ;
echo (intval($a)) ;
echo "<br>" ;
echo gettype(intval($a));