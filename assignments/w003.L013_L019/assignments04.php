<?php 

/* 
    التكليف 04

    إستخدم ال Predefined Variables لتطبع القيم التالية
    السطر الأول Document Root
    السطر الثاني Server Name
    السطر الثالث System Root
    السطر الرابع Open SSL Configuration

    "C:/xampp/htdocs"
    "localhost"
    "C:\WINDOWS"
    "C:/xampp/apache/bin/openssl.cnf"
*/


echo $_SERVER['DOCUMENT_ROOT']; 
echo "<br>"; 
echo $_SERVER['SERVER_NAME']; 

echo "<br>"; 
echo $_SERVER['SystemRoot']; 

echo "<br>"; 
echo $_SERVER['OPENSSL_CONF']; 

