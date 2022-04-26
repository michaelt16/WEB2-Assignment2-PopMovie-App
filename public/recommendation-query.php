<?php
require "details/movie-details.php";

session_start();
$favorites = $_SESSION["faves"][0];

$singleMovieObj = queryTitle($favorites);

// $singleMovieObj -> release_date();
// $singleMovieObj -> vote_average();



require "class/Movie.php";

function queryTitle($id)
{
  // $pdo = new PDO("mysql:host=34.130.174.43;dbname=movies;charset=utf8mb4", "root", "wHxtgPuczlgotII" );
  $pdo = new PDO("mysql:host=34.130.174.43;dbname=movies;charset=utf8mb4", "root", "wHxtgPuczlgotII");

  // $lowerBound = $rating - 0.25; 
  // $upperBound = $rating + 0.25; 

  $theQuery = <<< 'EOD'
 
  SELECT title , substring(release_date,1,4) as year , movie.vote_average 
  FROM movie, (SELECT substring(release_date,1,4) AS date, vote_average 
  FROM movie WHERE id:id) AS selectedmovie 
  WHERE (substring(release_date,1,4) = selectedmovie.date) 
  AND (movie.vote_average BETWEEN (selectedmovie.vote_average-0.25) 
  AND (selectedmovie.vote_average+0.25)) 
  AND (movie.vote_average != selectedmovie.vote_average);
EOD;

  $noFavMoviesQuery = <<< 'EOD'

SELECT id,title,vote_average 
FROM movie 
GROUP BY id 
ORDER BY vote_average DESC limit 10;

EOD;

  $statement = $pdo->prepare($theQuery);
  $statement->execute(["id" => $id]);
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

  return $movieObjs;
}
