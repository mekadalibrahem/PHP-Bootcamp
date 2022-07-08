<?php 
/* 
التكليف 05 تحدي

    المطلوب طباعة السطور بالأسفل كما هي كل جملة في سطر مع جميع العلامات الموجودة
    ممنوع إستخدام علامة ال Backslash نهائيا \
    ممنوع إستعمال عناصر Html مثل ال <br>

// Needed Output
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"

*/

echo nl2br( <<<'out'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
out);
