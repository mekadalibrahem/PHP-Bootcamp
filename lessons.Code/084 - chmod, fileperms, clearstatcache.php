<?php
/*
====================================
-- 084 - chmod, fileperms, clearstatcache 
-- link : None 
====================================
*/
?>
<?php

  /*
    File System Functions
    - chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache

    - You Can Change Owner chown()
    - You Can Change Group chgrp()
  */

  // mkdir("Y", 0700);
  echo fileperms("Y") . "<br>";
  chmod("Y", 0644);
  clearstatcache();
  echo fileperms("Y") . "<br>";