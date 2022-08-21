<?php 
/* 
التكليف التكليف 04

    لديك Function بإسم change_permissions تقبل منك Parameter واحد وهو إسم الملف
    يجب أن نتأكد أولا أن ال Parameter هو ملف وليس Directory
    يجب أن نتأكد أن الملف إمتداده هو txt وليس أي إمتداد آخر
    بعد أن تتحقق الشروط نريد تغيير التراخيص الخاصة بالملف
    نريد أن يكون ال Owner له صلاحيات لعمل كل شيء ولا يوجد أي صلاحيات نهائيا للباقي
    قم بتجربة ال Function على حسب الأمثلة بالأسفل لتتأكد أنها تعمل بشكل سليم
    يجب أن تتأكد أنه تم تغيير التراخيص بنجاح ثم تطبع رسالة “Permissions Changed” إذا كان نوع الملف txt

// Test Cases

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed

*/

function change_permissions($name){
    if(!file_exists($name) ){
        return  "This file is not exists" ."<br>" ;
    }else{
        if(!is_dir($name)) {
            if(pathinfo($name , PATHINFO_EXTENSION) == "txt"){
                    $is_change = chmod($name , 0700);
                    if($is_change){
                        return "Permissions Changed" ."<br>" ;
                    }
            }else{
                return "File Extension Is Not Txt"."<br>" ;
            }
        }else{
            return "This Is Directory And Only Files Allowed"."<br>" ;
            
        }
    } 
       
}


echo change_permissions("./Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("./Work.docx"); // File Extension Is Not Txt
echo change_permissions("./Result.txt"); // Permissions Changed

