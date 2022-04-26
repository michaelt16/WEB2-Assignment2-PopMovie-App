<?php 

 // $pdo = new PDO("mysql:host=34.130.174.43;dbname=movies;charset=utf8mb4", "root", "wHxtgPuczlgotII" );
session_start();

$_SESSION ["loggedIn"] = false;

function databaseInfo ($email){
 
 $pdo = new PDO("mysql:host=34.130.142.39;dbname=movies;charset=utf8mb4", "root", "NhHq0Bfea9u775Ar");
 $theQuery = <<< 'EOD'
SELECT firstname, lastname, country, city, email, password
FROM users  
WHERE email =:email 
EOD;

$statement = $pdo->prepare($theQuery);
  $statement->execute(["email" => $email]);
  $results = $statement->fetchAll(PDO::FETCH_OBJ);
  //do a check here for wrong email and pw
  if(!count($results) == 0){
    $onePass = $results [0];

    // $digest = password_hash($onePass -> password,PASSWORD_BCRYPT, ['cost' => 12]);

    // echo "pass2" . $onePass -> password; 10

    $passwordToggle = true;

    // echo $_POST["password"];
    // echo $onePass -> password; 
    
    if (password_verify($_POST["password"], $onePass -> password)) {
        $passwordToggle = true; 
        
        echo 'Password is valid!';
    } else {  
        echo 'Invalid password.';
        $passwordToggle = false;
    }

    if ( $passwordToggle == 1){
        echo "password and email are valid from db";
        $_SESSION ["firstname"] = $onePass-> firstname; 
        $_SESSION ["lastname"] = $onePass-> lastname; 
        $_SESSION ["country"] = $onePass-> country; 
        $_SESSION ["city"] = $onePass-> city; 

        
        $_SESSION ["loggedIn"] = true;
        var_dump($results);
        header ("Location: ../transition/transition.php");
        

    } else {
        header ("Location: login-error.php");
    }

}else{
    //redirect to 
    //
    header ("Location: login-error.php");
    //echo 'emptyyyy'; 
}
}

databaseInfo ($_POST ["email"]);
