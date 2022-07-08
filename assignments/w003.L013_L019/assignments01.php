<?php 
/*
        التكليف 01

        لديك ال Code التالي يحتوي على صفحة كاملة
        إستخدم ما تعلمته في المتغيرات لنستطيع تغيير جملة Elzero Courses بسهولة مستقبلا

        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Elzero Courses">
        <title>Welcome To Elzero Courses</title>
        </head>
        <body>
        <h1>Elzero Courses</h1>
        <p>Here In Elzero Courses We Provide Front-End And Back-End Courses</p>
        <hr>
        <div>Elzero Courses Is The What You Need.</div>
        <footer>All Right Reserved To Elzero Courses</footer>
        </body>
        </html>
*/

?>
<?php 
    $courseName = "Elzero Courses";
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content=<?php echo "$courseName" ?>>
            <title>Welcome To <?php echo $courseName ?></title>
        </head>
        <body>
            <h1><?php echo $courseName ?></h1>
            <p>Here In <?php echo $courseName ?> We Provide Front-End And Back-End Courses</p>
            <hr>
            <div><?php echo $courseName ?> Is The What You Need.</div>
            <footer>All Right Reserved To <?php echo $courseName ?></footer>
        </body>
    </html>