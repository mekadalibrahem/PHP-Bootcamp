<?php  
/*
 
    لديك رقم 100
    المطلوب إستخدام طريقتين لطباعة نوع البيانات
    يمكن أن تكون int أو Integer لا توجد أي مشكلة
    هناك طريقة ثالثة يمكنك البحث عنها لزيادة معلوماتك وهي إختيارية

        100

        // Method One
        // Method Two
        // Method Three => Optional
 */

echo gettype(100); 
echo "<br>"; 
echo  var_dump(100);
echo "<br>"; 
echo (is_int(100) ? "int" : " ") ;
echo "<br>";

