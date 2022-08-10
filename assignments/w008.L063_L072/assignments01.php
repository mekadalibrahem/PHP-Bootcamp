<?php 
/* 
التكليف التكليف 01

    لديك ال Array التالية
    المطلوب إستخدام ال Array Built-In Functions لتخرج بال Output المطلوب

$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];

// Output
Array
(
  [0] => Array
    (
      [ag] => Ahmed Gamal
      [om] => Osama Mohamed
    )
  [1] => Array
    (
      [mg] => Mahmoud Gamal
      [as] => Ahmed Samy
    )
  [2] => Array
    (
      [fa] => Farid Ahmed
      [sm] => Sayed Mohamed
    )
)


*/
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];

echo "<pre>" ;
print_r(array_chunk( array_change_key_case($friends) ,2,true));
echo "</pre>";