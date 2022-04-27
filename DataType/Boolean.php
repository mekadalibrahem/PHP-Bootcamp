<?php 

/**
 * ==================================
 * = Data Type 
 * = -----------------
 * = Boolean and Converting To Boolean
 */
/** 
 * var_dump() return information about variable  
 */
/** empty variable or empty data  =>  false  */
var_dump((bool) "");
echo '<br>' ;
var_dump((bool) array()); 
echo '<br>' ;
var_dump((bool) [] );
echo '<br>' ;
var_dump((bool)  0 );
echo '<br>' ;
var_dump((bool) "0");
echo '<br>' ;
var_dump((bool) "Elzero");
echo '<br>' ;
var_dump((bool) array(1) );
echo '<br>' ;
var_dump((bool) -100 );
echo '<br>' ;

