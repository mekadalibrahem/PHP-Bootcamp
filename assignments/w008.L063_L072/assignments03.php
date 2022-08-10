<?php 

/* 
   التكليف 03

    لديك ال Array التالية
    المطلوب إستخدام ال Array Built-In Functions لتخرج بال Output المطلوب

$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

// Output
Array
(
  [as] => Ahmed Samy
  [mg] => Mahmoud Gamal
  [om] => Osama Mohamed
  [ag] => Ahmed Gamal
)


*/


$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];

  echo "<pre>" ;
  print_r( 
        array_reverse(
            array_change_key_case(
            array_flip($friends)
            )
        )
    );
  echo "</pre>";
  