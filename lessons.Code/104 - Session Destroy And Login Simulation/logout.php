<?php
/*
====================================
--104 - Session Destroy And Login Simulation
-- link : https://youtu.be/vYAdljV1-4c
====================================
*/
?>
<?php

  session_start();
  session_unset();
  session_destroy();