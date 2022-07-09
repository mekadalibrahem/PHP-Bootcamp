<?php 
/*
    التكليف 03

    لديك Form تقوم بإرسال البيانات لنفس الصفحة
    المطلوب فحص إذا كان نوع ال Request هو Post وليس Get قبل إظهار البيانات المطلوبة
    المطلوب طباعة الرسالة كما في الأسفل ثم بعدها إسم المستخدم الذي يكتبه الشخص في ال Form
    لديك Array تحتوي على بعض الأسماء وهي تخص ال Admin
    قم بعمل شرط داخل الشرط الخاص بفحص ال Request يفحص إذا كان الإسم المكتوب واحد من هذه الأسماء أم لا
    إذا كان واحد من هذه الأسماء تقوم بطباعة رسالة “This Username {Username} Is Admin”

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"

// Needed Output
"The Request Method Is Post And Username Is Osama"
"This Username Osama Is Admin"
*/
?>

<?php 
$admins = ["Osama", "Ahmed", "Sayed"];
$isAdmin = false ;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["user"]; 
    if($username != ""){
        echo "The Request Method Is Post And Username Is $username <br>" ;
        foreach($admins as $user){
            if($username == $user){
                $isAdmin = true ;
                echo "This Username ${username} Is Admin" ;
            }
        }
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 03 </title>
</head>
<body>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
    
</body>
</html>