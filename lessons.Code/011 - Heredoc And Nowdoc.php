<?php
/*
====================================
-- 011 - Heredoc And Nowdoc 
-- link : url Not Found 
====================================
*/
?>
<?php

  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = Heredoc
  = Nowdoc
  ============================================
  */

  $name = "Osama";

  // Heredoc
  echo <<<"Here"
  Hello PHP
  Special Characters $$$ ' ' ' """"" \\\\
  Hello My Name Is $name
  Here;

  echo '<br>';

  // Nowdoc
  echo <<<'Now'
  Hello PHP
  Special Characters $$$ ' ' ' """"" \\\\
  Hello My Name Is $name
  Now;

  echo '<br>';

  echo '<ul>';
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
    echo "<li>" . $name . "</li>";
  echo '</ul>';

  echo '<br>';

  echo <<<"navlinks"
  <ul>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
  </ul>
  navlinks;