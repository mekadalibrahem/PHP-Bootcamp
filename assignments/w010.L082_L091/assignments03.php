<?php 

/* 
   التكليف 03

    قم بإنشاء Directory جديد بإسم Programming وداخله Directory بإسم PHP
    نحتاج التراخيص أن تكون لل Owner فقط هو من يستطيع عمل Read, Write, Execute والباقي يقوموا بعمل Execute فقط
    جميع ال Directories طبعا لها نفس التراخيص
    بعد إنشاء ال Directories نريد حذفهم مرة أخرى ولكن عند تشغيل ال Script مرة واحدة يقوم بحذفهم جميعا
    نريد عدم وجود Warning إذا تم تشغيل ال Script مرة أخرى بعد حذف ال Directories
    إستخدم ما تعلمته مع بعض البحث لتطبع رسالة تفيد أنه تم حذف ال Directory بنجاح. شاهد المثال

// Output
"Directory Programming/PHP Removed"
"Directory Programming Removed"



*/

$folser = "./Programming/PHP" ;

if(file_exists($folser)){
    echo "this folder is exists" ;
}else{
mkdir($folser , 0722 ,true) ;
}

$is_del = rmdir("./Programming/PHP");
if($is_del == true){
    echo "Directory Programming/PHP Removed " ."<br>";
}
$is_del = rmdir("./Programming");
if($is_del == true){
    echo "Directory Programming Removed" ."<br>";
}
