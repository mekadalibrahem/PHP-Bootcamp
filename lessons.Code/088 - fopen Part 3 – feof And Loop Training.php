<?php
/*
====================================
-- 088 - fopen Part 3 – feof And Loop Training 
-- link : None 
====================================
*/
?>
<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &amp;#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/

// echo '<pre>';
// print_r(file("elzero.txt"));
// echo '</pre>';

// echo count(file("elzero.txt"));

$handle = fopen("elzero.txt", "r");

// $line = 1;

// while (! feof($handle)) {

//   echo "Line $line => " . fgets($handle) . "<br>";

//   $line++;

// }

for ($i = 0; $i < count(file("elzero.txt")); $i++) {

  echo fgets($handle) . "<br>";

}

fclose($handle);