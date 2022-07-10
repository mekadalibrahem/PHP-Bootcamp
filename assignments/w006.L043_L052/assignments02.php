<?php 


/* 

التكليف 02

    قم بإنشاء Function تقبل عدد غير معروف من ال Arguments
    المطلوب جميع جميع ال Arguments بجانب بعضهم في متغير بإسم all
    المطلوب عمل Return لقيمة هذا المتغير
    المطلوب جلب ال Arguments بطريقتين مختلفتين
    شاهد المثال لتفهم الفكرة

// Write Function Content Here

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
*/
#way 1 : 
function get_arguments_way1(){
    $result = "" ;
    foreach (func_get_args() as  $arg) {
        $result .= "$arg " ;
    }
    return $result . "<br>" ;
}



echo get_arguments_way1("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments_way1("I", "Love", "PHP"); // I Love PHP


echo "#########################################<br>" ;
#way 1 : 
function get_arguments_way2(...$words){
    $result = "" ;
    foreach ($words as  $word) {
        $result .= "$word " ;
    }
    return $result . "<br>" ;
}



echo get_arguments_way2("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments_way2("I", "Love", "PHP"); // I Love PHP