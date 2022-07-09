<?php 

/* 
    التكليف 05

    لديك مجموعة من الشروط ونريد أن نجمع الشروط في مكان واحد
    المطلوب أن تكون في سطر واحد فقط

$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}

// Needed Output
"The Age Is Good To Go"
"The Name Is Good To Go"
"The Country Is Good To Go"
*/


$name = "Osama";
$age = 40;
$country = "Egypt";



echo (
    ($age > 18) ? ("The Age Is Good To Go<br>" . (
        (gettype($name) === "string") ? ("The Name Is Good To Go<br>" .( 
                    ($country === "Egypt") ?("The Country Is Good To Go<br>") 
                : " ") 
        ) : " ") 
    ) : " "
);

 
  