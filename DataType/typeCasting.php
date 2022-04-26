<?php 
/**
 * ================  #video 7  ====================
 * = Data Type 
 * = ---------------------- 
 * = Type Casting  
 * -------------------------- 
 * "boolean" or "bool" 
 * "integer" or "int" 
 * "float" or "double  or "real" 
 * "string" 
 * "array" 
 * "object" 
 * "null"
 * -------------
 * Search for SetType 
 * ==============================
 */
/** 
 * التحويل بين انواع البيانات برمجيا 
 */
echo 5 + (int) "5 lessons"; 
echo '<br>' ;
echo 5 + (integer) "5 lessons" ;
echo '<br>' ;
echo 5 + ( integer ) "5 lessons" ;

echo '<br>' ;
echo gettype( 5 + (int) "5 lessons" );
echo '<br>' ;
echo 10 + 15.5 ;
echo '<br>' ;
echo 10 + (int) 15.5 ;
echo '<br>' ;
echo gettype(10 + (int) 15.5 );
echo '<br>' ;
echo 10.5 + 10.5 ;
echo '<br>' ;
echo gettype(10.5 + 10.5); /** double */
echo '<br>' ;
echo (int) 10.5 + (int) 10.5 ;  /** 20 */
echo '<br>' ;
echo (int) (10.5 + 10.5); /** 21 */
