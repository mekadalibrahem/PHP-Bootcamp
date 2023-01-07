<?php
/*
====================================
--104 - Session Destroy And Login Simulation
-- link : https://youtu.be/vYAdljV1-4c
====================================
*/
?>
<?php

/*
  Sessions
  - Unset And Destroy
  - Login And Logout Simulation
*/

session_start();

// $_SESSION['name'] = "Elzero";
// session_unset();
// session_destroy();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if ($_POST['user'] === "Osama") {
    $_SESSION['username'] = "Elzero";
    $_SESSION['id'] = 1005;
  }
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if (isset($_SESSION['username'])) {
  echo "Welcome " . $_SESSION['username'];
} else {

?>

<form action="" method="POST">
<input type="text" name="user">
<input type="submit" value="Login">
</form>

<?php } ?>

<a href="logout.php">Logout</a>