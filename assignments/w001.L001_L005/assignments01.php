<!--

لدينا صفحة PHP تحتوي على ال Code في الأسفل
    مطلوب كتابة تعليق في بداية الصفحة من أكثر من سطر يمكنك كتابة ما تريد فيه
    مطلوب كتابة نوع الترميز UTF-8 في المكان المخصص له بواسطة PHP
    مطلوب طباعة جملة My First PHP Page داخل وسم ال Title بإستخدام PHP بالطريقة المختصرة
    مطلوب طباعة جملة We Love في ال div الأول بإستخدام PHP
    مطلوب طباعة جملة Elzero Channel في ال div الثاني بإستخدام PHP

-->

<?php
/* 
    this is multipl line commet 
    this Assignment01  in week 1
    

*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset=<? echo "UTF-8"; ?> >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "My First PHP Page "; ?></title>
  </head>
  <body>
    <div><?= "We Love"; ?></div>
    <div><?= "Elzero Channel"; ?></div>
  </body>
</html>