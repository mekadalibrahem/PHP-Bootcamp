<?php 


/* 

    التكليف 06

        لديك ال Code التالي بالأسفل يحتوي على خطأ
        يجب عليك إصلاح الخطأ أولا
        بعد ذلك يجب عليك إزالة 2 Characters فقط ليخرج من ال Code ال Output المطلوب بالأسفل

    $something = "Programming";

    echo <<<'code'
    Hello \PHP\
    We Love $something
            code;

    // [1] Fix The Error
    // [2] Remove 2 Characters To Get The Output

    // Needed Output
    Hello \PHP\ We Love Programming
*/

$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;
