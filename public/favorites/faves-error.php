<?php
require_once("../header/updateState.php");

//no point risking this page if the user is alredy logged in
if (loggedIn()) {
  header("Location: favorites.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login error</title>
</head>

<body>
  <p>Oops!!You have to be logged in to view favorites</p>
  <br>
  <a href="https://comp-3512-w22-team-01.herokuapp.com/login/login.php">Login</a>
  <br>
  <a href="https://comp-3512-w22-team-01.herokuapp.com/register/register.php">Register</a>
</body>

</html>
