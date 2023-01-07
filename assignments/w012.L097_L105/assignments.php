<?php 
// التكليف 01

// قم بإنشاء ال Cookies لتظهر كما في الصورة
// وقت ال Expire هو بعد شهرين وخمس أيام من الوقت الحالي للإنشاء

setcookie("site[layout]"  , "boxed"  , strtotime("+2 month +5 days") );
setcookie("site[font]"  , "Swat"  , strtotime("+2 month +5 days") );
setcookie("site[color]"  , "blue"  , strtotime("+2 month +5 days") );


// التكليف 02

//     قم بطباعة محتوى ال Cookies كما في المثال
//     في السطر التالي قم بطباعة الرسالة كما في المثال مع جلب القيم من ال Cookies
// Array
// (
//   [site] => Array
//     (
//       [color] => blue
//       [font] => Swat
//       [layout] => boxed
//     )
// )
// "Your Color Is blue And Your Font Is Swat"


if (isset($_COOKIE['site'])){
    echo "<pre>"; 
    print_r($_COOKIE);
    echo "</pre>"; 
    echo "<br>"; 

    echo "Your Color Is ".$_COOKIE['site']['color'] . " And Your Font Is " .$_COOKIE['site']['font'] ;

}

// التكليف 03

//     قم بإزالة ال Cookie الخاصة بال Layout من ال Cookies السابقة ليتبقى لديك ال Font وال Color فقط
setcookie("site[layout]"  , "boxed"  , time() -1 );


// التكليف 04

//     قم بالتعديل على ال Cookies المتبقية لتجعلها تنتهي مع إنتهاء الجلسة “Session”


setcookie("site[font]"  , "Swat"  ,  );
setcookie("site[color]"  , "blue"  ,  );


?>
