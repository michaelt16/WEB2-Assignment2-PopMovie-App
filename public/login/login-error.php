<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PopMovie - Register</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="../header/css/header.css">
  <script src="js/form.js"></script>

  <script src="../header/js/hamBurgerMenu.js"></script>
</head>

<body>
  <div class="header">
    <div class="container">

      <?php require "../header/testHeader.php" ?>

      <div class="inner-container">


        <div class="leftside">
          <form id="signup" class="form" action = "user-database.php" method= "post">
            <div class="logo"><img src="../logo/siteLogo.png" style="width:200px; height:200px;" alt="logo"></div>
            <h1>Sign In</h1>
            <h2>Use your PopMovie Account</h2>

            

            <div class="email formField">
              <!-- <label for="username">Email:</label> -->
              <input type="text" name="email" id="email" autocomplete="off" placeholder="Email">
              <small class="email-caption"></small>
            </div>


            <div class="password formField">
              <!-- <label for="password">Password:</label> -->
              <input type="password" name="password" id="password" autocomplete="off" placeholder="Password">
              

            </div>

            <p style= "color:#dc3545">Email or Password is wrong!</p>


            <div class="signup formField">
              <input type="submit" value="Log In">
            </div>
          </form>
        </div>
      
        </div>

        <div>

        </div>

      </div>
      <div>
        
      </div>
    </div>
  </div>















</body>

</html>
