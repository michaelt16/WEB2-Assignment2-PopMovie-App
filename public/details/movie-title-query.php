<?php

require "class/Movie.php";

function queryTitle($title)
{
  // $pdo = new PDO("mysql:host=34.130.174.43;dbname=movies;charset=utf8mb4", "root", "wHxtgPuczlgotII" );
  $pdo = new PDO("mysql:host=34.130.174.43;dbname=movies;charset=utf8mb4", "root", "wHxtgPuczlgotII");
  $wildcardTitle = "%$title%";
  $theQuery = <<< 'EOD'
SELECT *
FROM movie  
WHERE movie.title LIKE :wildcardTitle
 
EOD;

  $statement = $pdo->prepare($theQuery);
  $statement->execute(["wildcardTitle" => $wildcardTitle]);
  //$results = $statement->fetchAll(PDO::FETCH_OBJ);
  // $results = $statement->fetchAll(PDO::FETCH_CLASS, "Movie");
  $results = $statement->fetchAll(PDO::FETCH_OBJ);
  $movieObjs = [];
  foreach ($results as $movie) {

    array_push($movieObjs, new Movie(
      $movie->title,
      $movie->id,
      $movie->tmdb_id,
      $movie->imdb_id,
      $movie->imdb_link,
      $movie->release_date,
      $movie->vote_average,
      $movie->vote_count,
      $movie->runtime,
      $movie->popularity,
      $movie->revenue,
      $movie->poster_path,
      $movie->tagline,
      $movie->overview,
      $movie->production_companies,
      $movie->production_countries,
      $movie->genres,
      $movie->keywords,
      $movie->cast,
      $movie->crew,
      $movie->backdrop_path
    ));
  }
  //reminder: change this in a for each loop?
  //or fatchall class
  //
  // $movieDetails = new Movie(
  //   $oneMovie->title,
  //   $oneMovie->id,
  //   $oneMovie->tmdb_id,
  //   $oneMovie->imdb_id,
  //   $oneMovie->release_date,
  //   $oneMovie->vote_average,
  //   $oneMovie->vote_count,
  //   $oneMovie->runtime,
  //   $oneMovie->popularity,
  //   $oneMovie->revenue,
  //   $oneMovie->poster_path,
  //   $oneMovie->tagline,
  //   $oneMovie->overview,
  //   $oneMovie->production_companies,
  //   $oneMovie->production_countries,
  //   $oneMovie->genres,
  //   $oneMovie->keywords,
  //   $oneMovie->cast,
  //   $oneMovie->crew
  // );

  return $movieObjs;
}
