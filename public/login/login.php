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
          <form id="signup" class="form" action="user-database.php" method="post">
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
              <small></small>

            </div>




            <div class="signup formField">
              <input type="submit" value="Log In">
            </div>
          </form>
        </div>

        <!-- </div>

        <div>

        </div> -->

      </div>
      <div>
        <!-- <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
        </svg> -->
      </div>
    </div>
  </div>















</body>

</html>
