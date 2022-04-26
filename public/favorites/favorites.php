<?php
session_start();

//require_once("checkFavourites.inc.php");
require_once("../header/updateState.php");
require_once("../details/movie-details.php");

if (!loggedIn()) {
  header("Location: faves-error.php");
}
if (isset($_SESSION["faves"])) {
  var_dump($_SESSION["faves"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="header/css/header.css" />
  <script src="header/js/dropdown.js"> </script>
</head>

<body>
  <?php require "header/testHeader.php" ?>
  <h1>PLACEHOLDER FOR MILESTONE 4 FIX </h1>



</body>

</html>
