<?php
/*
====================================
-- 014 - Testing Variable In Real Life 
-- link : url Not Found 
====================================
*/
?>
<?php $username = "Elzero" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php echo $username ?></title>
  </head>
  <body>
    <div>Welcome <?php echo $username ?></div>
    <div><?php echo $username ?> You Scored 1000 Points</div>
    <div>
      <?php include("score.php") ?>
    </div>
  </body>
</html>