<?php 

/* 

التكليف 07

    لديك Array فيها أرقام وحروف
    المطلوب طباعة الأرقام فقط تحت بعضها
    في السطر قبل الأخير قم بطباعة عدد الأرقام التي تم طباعتها بطريقة برمجية
    في السطر الأخير قم بطباعة عدد الحروف التي تم تجاهلها بطريقة برمجية
    لاحظ أن ال Array يمكن أن تتغير لذلك لا تقم بحساب عدد العناصر بنفسك

$mix = [1, 2, "A", "B", "C", 3, 4];

// Output
1
2
3
4
"4 Numbers Printed"
"3 Letters Ignored"
*/

$mix = [1, 2, "A", "B", "C", 3, 4];
$countLettersIgnored = 0 ;
$countNumbersPrinted = 0 ;

for($i = 0 ; $i <count($mix) ; $i++){
    if(is_int($mix[$i])){
        $countNumbersPrinted++ ; 
        echo $mix[$i] . "<br>" ;
    }else{
        $countLettersIgnored++;
    }
}
echo nl2br(
" ${countNumbersPrinted} Numbers Printed
${countLettersIgnored} Letters Ignored"
);