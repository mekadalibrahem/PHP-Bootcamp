<?php 

/*
التكليف 17 تحدي

    لديك ال Array التالية
    المطلوب عدم إستخدام ال Shuffle Function نهائيا
    المطلوب عمل Shuffle للعناصر الموجودة داخل ال Array

$nums = [1, 2, 3, 4, 5, 6];

// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
Array
(
  [0] => 5
  [1] => 1
  [2] => 6
  [3] => 2
  [4] => 4
  [5] => 3
)

// Example 2
Array
(
  [0] => 4
  [1] => 3
  [2] => 6
  [3] => 1
  [4] => 5
  [5] => 2


)


*/

$nums = [1, 2, 3, 4, 5, 6];

function remove_item_in_array($array , $index){
    $new_array = [] ;
    foreach ($array as $key => $value) {
        if($key== $index) continue ;
        else $new_array[$key] = $value ; 
    }
    return $new_array ;
}
function random_resort_array($array){
    $random_array = [] ;
    $count = 10 ;
    while($array && $count > 0){
        $count-- ;
        $index =  array_rand($array);
        $random_array[] = $array[$index];
        $array = remove_item_in_array($array , $index);

    }
    return $random_array ;
}

echo "<pre>" ;
print_r(random_resort_array($nums));
echo "</pre>";
echo "<pre>" ;
print_r(random_resort_array($nums));
echo "</pre>";
echo "<pre>" ;
print_r(random_resort_array($nums));
echo "</pre>";
