<?php 
/**
 * =============================
 *  Data  Types  
 * =-------------------
 * bool => Boolean  { true or false }
 * int => Integer  numbers [... -1 , 0 , 1 ...]
 * float => Floating Point Number | double numbers [... -0.1  , 0 , 0.1 ...]
 * string   { text }
 * array  { group of data }
 * Other Type 
 * gettype() 
 * ============================== 
 * 
 */

echo gettype(True); /** boolean */
echo '<br>' ;
echo gettype(False); /** boolean */
/** ملاحظة اللغة غير حساسة لحالة الاحرف في القيم المنطقية  */
echo '<br>' ;
echo gettype(trUe); /** boolean */
echo '<br>' ;
echo gettype(100); /** integer */
echo '<br>' ;
echo gettype(-1); /** integer */

echo '<br>' ;
echo gettype(0); /** integer */

echo '<br>' ;
echo gettype(70.0); /** double */
echo '<br>' ;
echo gettype(-60.3); /** double */
echo '<br>' ;
echo gettype("text"); /** string */
echo '<br>' ;
echo gettype(array("EG" => "Egypt" ,  "SY" => "Syria")); /** array */
echo '<br>' ;
echo gettype(array( "Egypt" , "Syria")); /** array */
echo '<br>' ;
echo gettype(["Egypt" ,  "Syria"]); /** array */
echo '<br>' ;







