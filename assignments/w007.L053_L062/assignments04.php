<?php 
/* 
التكليف التكليف 04

    لديك المتغير التالي يحتوي على HTML Tags نحتاج أن نزيل منها ال <h1> ونترك الباقي
    شاهد المثال لتفهم المطلوب

$str = "<div><b>Elzero</b></div>";

// <b>Elzero</b>

*/


$str = "<div><b>Elzero</b></div>";
echo strip_tags($str , "<b>") ;
// <b>Elzero</b>


