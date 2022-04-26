<?php

session_start();


$digest = password_hash($_POST["password"], PASSWORD_BCRYPT, ['cost' => 12]);

echo $digest;
$pdo = new PDO("mysql:host=34.130.142.39;dbname=movies;charset=utf8mb4", "root", "NhHq0Bfea9u775Ar");
$sql = "INSERT INTO users (firstname,lastname,city,country,email,password) 
 VALUES(?,?,?,?,?,?)";


$statement = $pdo->prepare($sql);

// echo $_POST["firstname"];
// echo $_POST["lastname"];
// echo $_POST["city"];
// echo $_POST["email"];
// echo $_POST["country"];

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$city = $_POST["city"];
$country = $_POST["country"];




$statement->execute([$firstname, $lastname, $city, $country, $email, $digest]);
$results = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($results);




function getInfoToLog($email)
{

  $pdo = new PDO("mysql:host=34.130.142.39;dbname=movies;charset=utf8mb4", "root", "NhHq0Bfea9u775Ar");
  $theQuery = <<< 'EOD'
 SELECT firstname, lastname, country, city, email, password
 FROM users  
 WHERE email =:email 
 EOD;
  $statement = $pdo->prepare($theQuery);
  $statement->execute(["email" => $email]);
  $results = $statement->fetchAll(PDO::FETCH_OBJ);

  if (!count($results) == 0) {
    $_SESSION["loggedIn"] = true;
    $onePass = $results[0];
    $_SESSION["firstname"] = $onePass->firstname;
    $_SESSION["lastname"] = $onePass->lastname;
    $_SESSION["country"] = $onePass->country;
    $_SESSION["city"] = $onePass->city;


    header("Location: ../transition/transition.php");
  } else {
    header("Location: login-error.php");
  }
}




getInfoToLog($email);
