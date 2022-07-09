<?php 

/* 
    التكليف 08

    جميع ما يلي من ال Codes به أخطاء
    المطلوب عدم إظهار الخطأ وإظهار جملة Custom Error بدلا من الخطأ

    // Code 1
    $a = $b;

    // Code 2
    $f = file("Not_A_File");

    // Code 3
    include("Not_A_File");
*/

    // Code 1
    $a = @$b or die("variable not founded");

    // Code 2
    $f = @file("Not_A_File") or die("this file or folde not exists");

    // Code 3
    (@include("Not_A_File") )or die("cannt include this file : the file not founde");
?>