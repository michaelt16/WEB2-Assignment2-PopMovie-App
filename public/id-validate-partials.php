<?php
function locationString($id)
{
  return "Location: details/view/moviedetailsview.php?id=" . $id;
}

function noIdKey()
{
  return !$_GET["id"];
}

function moreThanOneKey()
{
  return sizeof(explode("&", $_SERVER['QUERY_STRING'])) > 1;
  //return sizeof($_GET["id"]) > 1;
}

function keyIsNotInteger()
{
  return !is_numeric($_GET["id"]);
}

function idValueIsInvalid()
{
  return (intval($_GET["id"]) <= 0);
}

function idNotFound()
{
  include "details/all-movie-ids.php";
  $id = array_search(intval($_GET["id"]), $allIds, strict: true); //var_dump($id); return $id===false; 
}
 