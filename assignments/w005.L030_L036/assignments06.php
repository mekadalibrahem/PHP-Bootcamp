<?php 
    /* 
    التكليف 06

    لديك مجموعة من الشروط كما في الأسفل
    نريد عمل نفس الشروط التالية بإستخدام Switch

$genre = "Hack And Slash";

if ($genre === "RPG") {

  echo "I Recommend Ys Games";

} case ($genre === "Hack And Slash") {

  echo "I Recommend Castlevania Games";

} case ($genre === "FPS") {

  echo "I Recommend Uncharted Games";

} case ($genre === "Platform") {

  echo "I Recommend Megaman Games";

} case ($genre === "Puzzle") {

  echo "I Recommend Megaman Games";

} else {

  echo "I Recommend Shadow Of Mordor And Shadow Of War";

}

// Needed Output
"I Recommend Castlevania Games"
    
    */




$genre = "Hack And Slash";
switch ($genre) {
    case 'RPG':
        echo "I Recommend Ys Games";
        break;
    case $genre === "Hack And Slash" :
        echo "I Recommend Castlevania Games";
        break ;
    case $genre === "FPS" :
        echo "I Recommend Uncharted Games";
        break;
    case $genre === "Platform" :
        echo "I Recommend Megaman Games";
        break;
    case $genre === "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
        break;
}


 

 




 


?>