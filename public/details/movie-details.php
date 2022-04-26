<?php

require "class/Movie.php";


function databaseInfo($id)
{
  // $pdo = new PDO("mysql:host=34.130.174.43;dbname=movies;charset=utf8mb4", "root", "wHxtgPuczlgotII" );
  $pdo = new PDO("mysql:host=34.130.174.43;dbname=movies;charset=utf8mb4", "root", "wHxtgPuczlgotII");
  $theQuery = <<< 'EOD'
SELECT *
FROM movie  
WHERE movie.id = :id
 
EOD;

  $statement = $pdo->prepare($theQuery);
  $statement->execute(["id" => $id]);
  $results = $statement->fetchAll(PDO::FETCH_OBJ);
  $oneMovie = $results[0];


  $movieDetails = new Movie(
    $oneMovie->title,
    $oneMovie->id,
    $oneMovie->tmdb_id,
    $oneMovie->imdb_id,
    $oneMovie->imdb_link,
    $oneMovie->release_date,
    $oneMovie->vote_average,
    $oneMovie->vote_count,
    $oneMovie->runtime,
    $oneMovie->popularity,
    $oneMovie->revenue,
    $oneMovie->poster_path,
    $oneMovie->tagline,
    $oneMovie->overview,
    $oneMovie->production_companies,
    $oneMovie->production_countries,
    $oneMovie->genres,
    $oneMovie->keywords,
    $oneMovie->cast,
    $oneMovie->crew,
    $oneMovie->backdrop_path
  );

  return $movieDetails;
}

$movieID = $_GET['id'];
$movieDetails = databaseInfo($movieID);
