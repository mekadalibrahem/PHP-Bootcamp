<?php 
/* 
    التكليف 01

    لديك المتغيرات التالية في الأسفل
    قم بعمل شرط للتحق من أن المتغير b أكبر من المتغير a
    في نفس الشرط تحقق من أن المتغير a مطابق للمتغير c
    في نفس الشرط تحقق من أن المتغير a مجموع على المتغير c مطابق للمتغير b
    إذا تحقق الشرط تكتب كلمة Yes

    $a = 100;
    $b = 200;
    $c = 100;

    
    #Check That:
    #Variable "b" Larger Than Variable "a"
    #Variable "a" Identical To Variable "c"
    #Variable "a" Plus Variable "c" Identical To Variable "b"
    "Yes"



*/

$a = 100;
$b = 200;
$c = 100;


#Check That:
#Variable "b" Larger Than Variable "a"
#Variable "a" Identical To Variable "c"
#Variable "a" Plus Variable "c" Identical To Variable "b"

# way 1 : 
if($b> $a   ){
    if( $a === $c){
        if(($a + $c) === $b){
            echo "Yes " ;
        }
    }
}
echo "<br>" ;
# way 2 : 
if(($b> $a) && ($a === $c) && (($a + $c) === $b)){
    echo "Yes";
}