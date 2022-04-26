<?php
session_start();
function copyFaves()
{
  $faves = $_SESSION["faves"];
  $sneakyList = "<ul class='burnAfterReading'>";
  foreach ($faves as $id) {
    $sneakyList .= "<li>$id</li>";
  }
  $sneakyList .= "</ul>";
  return $sneakyList;
}
