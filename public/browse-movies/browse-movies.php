<?php
//stuff happens in the js now
// require "browse-redirect.php";
$title = $_GET["searchTitle"];
//reminder: pull from session

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="api-fetch.js"></script>
  <link rel="stylesheet" href="css/favoriteTest.css">
  <link rel="stylesheet" href="../header/css/header.css" />
  <link rel="stylesheet" href="css/browsemovie.css">
  <script src="js/goToDetails.js"> </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <title>PopMovie - Browse Movies</title>
</head>

<body>

  <?php require "../header/testHeader.php" ?>
  <?php require "browse-redirect.php" ?>
  <?php require "../favorites/cringy-php-js-link/writefaves.inc.php" ?>


</body>
<!-- <script src="../favorites/cringy-php-js-link/pastefaves.js"></script> -->

</html>
