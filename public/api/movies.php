<?php
require "../details/movie-title-query.php";
//guess: eventually, the browse-movies.php will route to here
$title = urlencode($_GET[queryify("title")]);
$data;

function queryify($str)
{
  return strtolower($str);
}


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
if (!$_GET["title"] || sizeof(explode("&", $_SERVER['QUERY_STRING'])) != 1) {
  //$data = json_encode(queryTitle(""), JSON_NUMERIC_CHECK);
  $data = [];
} else {
  //json/application?
  // $data = json_encode(queryify(queryTitle($title)), JSON_NUMERIC_CHECK);
  $data = json_encode(queryTitle($title), JSON_NUMERIC_CHECK);
}

//var_dump(queryify($title));
echo $data;
