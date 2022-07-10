<?php 
/* 
التكليف 09

    قم بعمل Anonymous Function تكتب رسالة ترحيبية
    بعد عمل ال Function قم بعمل نسخة منها بواسطة ال Arrow Function Syntax
    شاهد المثال لتفهم المطلوب

// Write Function Content Here

// Needed Output
echo $greet("Osama"); // Greetings

*/

$greet = function($name) {
    return "Greetings" ;
};

echo $greet("Osama"); // Greetings

$Arrowgreet = fn($name) => "Greetings" ;
echo "<br>" ;
echo $Arrowgreet("Osama"); // Greetings
