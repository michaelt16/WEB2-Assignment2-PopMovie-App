<?php
session_start();

function loggedIn()
{

  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
    return true;
  } else {

    return false;
  }
}
