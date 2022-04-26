<?php

class QueryBuilder
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function getMovie($id)
  {
    $theQuery = <<<'EOD'
    SELECT * 
    FROM movie 
    WHERE movie.id = :id
    EOD;

    $statement = $this->pdo->prepare($theQuery);
    $statement->execute(["id" => $id]);
    return $statement->fetchObject('Movie');
  }
}