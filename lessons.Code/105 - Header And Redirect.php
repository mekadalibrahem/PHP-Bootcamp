<?php
/*
====================================
-- 105 - Header And Redirect 
-- link :https://youtu.be/B0KXzGKWlSY
====================================
*/
?>
<?php

/*
  Header
  - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
  - You Can Use To Control Cache Or Force File Download

  header(Header[Required], Replace[Optional] = True, Response_Code[Optional])
*/

// header("HTTP/1.0 404 Not Found");
// header("expires: Sat, 01 Jan 2022 01:00:00");
// header("cache-control: no-cache, must-revalidate");
// echo "<a href='test.php'>Test</a>";
// header("Refresh:5; url=test.php");
header("Location: test.php");
exit;