<?php
/*
====================================
-- 087 - fopen Part 2 – fwrite 
-- link : None 
====================================
*/
?>
<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read &amp; Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read &amp; Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
*/

$handle = fopen("elzero.txt", "r");

fwrite($handle, "\r\nThis Is A New Line 1", 5);
fwrite($handle, "\r\nThis Is A New Line 2");

fclose($handle);