<?php
/*
====================================
-- 085 - basename, dirname, realpath, pathinfo 
-- link : None 
====================================
*/
?>
<?php

  /*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */

  echo basename(__FILE__) . "<br>";
  echo basename(__FILE__, ".php") . "<br>";

  echo dirname(__FILE__, 3) . "<br>";

  echo realpath(__FILE__) . "<br>";

  echo "<pre>";
  print_r(pathinfo(__FILE__));
  echo "</pre>";

  echo pathinfo(__FILE__)["extension"] . "<br>";
  echo pathinfo(__FILE__)["dirname"] . "<br>";

  echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>";