<?php 


/* 
التكليف 07

    لديك ال Code التالي بالأسفل
    يجب عدم التعديل على الجملة نهائيا ولا نوعها
    المطلوب إستخدام ما تعلمته ليخرج ال Output في سطر Echo الأول رقم 1 وفي سطر Echo الثاني كلمة integer

echo "Hello PHP";
echo '<br>';
echo "Hello PHP";

// Needed Output
1
integer

*/
echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)((bool)"Hello PHP"));
