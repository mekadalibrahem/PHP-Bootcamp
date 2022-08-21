<?php
/*
====================================
-- 031 - If, Elseif, Else Real Life Examples 
-- link : None 
====================================
*/
?>
<?php

  /*
    Control Structure
    - If, Elseif, Else <= Real Life Examples

    3% To 30%
  */

  // If

  $page = "About";

  if ($page == "About") {

    echo "This Is The Page";

  }

  echo '<br>';

  // If, Else

  $title = "";

  if ($title == "") {

    echo "Unknown Page";

  } else {

    echo $title;

  }

  echo '<br>';

  // If, Elseif, Else

  $lang = "Elzero";

  if ($lang == "Arabic") {

    echo 'مرحبا';

  } elseif ($lang == "English") {

    echo 'Hello';

  } elseif ($lang == "Spanish") {

    echo 'Hola';

  } else {

    echo 'Unknown Language';

  }