<?
session_start();

$movieId = $_GET["id"];

if (!isset($_SESSION["faves"])) {
  $_SESSION["faves"] = [];
}

if (!in_array($movieId, $_SESSION["faves"])) {
  $_SESSION["faves"][] = $movieId;
} else {
  $kill = array_search($movieId, $_SESSION["faves"]);
  unset($_SESSION["faves"][$kill]);
}


//returns to previous page
header("Location: " . $_SERVER["HTTP_REFERER"]);
