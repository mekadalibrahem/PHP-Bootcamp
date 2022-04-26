<?php 

/**
 * ================= video #7 =====================
 * = Data Type  
 * = -------------------
 * = Type juggling  + Automatic Type Conversion 
 * ================================================
 */
echo 1 + "2"; /** 3 */
echo '<br>'; 
echo gettype(1 + "2"); /** Integer */ 
/**  ملاحظة التحويل تم للبيانات الناتجة وليس الاساسية  */
echo '<br>'; 
echo True ; /** 1 */
echo '<br>'; 

echo gettype(True) ; /** boolean */
echo '<br>'; 

echo true  +  true ; /** 2 */
echo '<br>'; 

echo gettype(true + true) ; /** integer  */
echo '<br>'; 
echo 5 + "5 lessons"; /** 10 => warning */
echo gettype(5 + "5 lessons"); /** integer => warning */
echo '<br>'; 
echo 10 + 15.5 ; /** 25.5 */ 
echo '<br>'; 
echo gettype(10 + 15.5); /** double => float*/




