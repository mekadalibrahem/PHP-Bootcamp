<?php 


/* 
    التكليف 02

    لديك المتغيرات التالية في الأسفل
    المتغيرات يمكن أن تتغير القيم الخاصة بيها وسوف تجد أكثر من Test Case بالأسفل
    قم بعمل الشرط الذي يتحقق من المطلوب ويخرج النتيجة المطلوبة كما يلي
    إذا كان المتغير a أكبر من المتغير b تطبع رسالة “A Is Larger Than B”
    إذا كان المتغير a أكبر من المتغير c تطبع رسالة “A Is Larger Than C”
    إذا لم يكن المتغير a أكبر من المتغير b أو c تطبع رسالة “A Is Not Larger Than B Or C”
    شاهد التجارب بالأسفل

// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C
// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B

// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c
*/
// Test Case 1
$a = 100;
$b = 200;
$c = 300;
if($a > $b){
    echo " A Is Larger Than B" ;
}elseif($a > $c){
    echo " A Is Larger Than C" ;

}else{
    echo "A Is Not Larger Than B Or  " ;
}
echo "<br>";



// A Is Not Larger Than B Or C
// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B
if($a > $b){
    echo " A Is Larger Than B" ;
}elseif($a > $c){
    echo " A Is Larger Than C" ;

}else{
    echo "A Is Not Larger Than B Or  " ;
}
echo "<br>";



// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c
if($a > $b){
    echo " A Is Larger Than B" ;
}elseif($a > $c){
    echo " A Is Larger Than C" ;

}else{
    echo "A Is Not Larger Than B Or  " ;
}
echo "<br>";

