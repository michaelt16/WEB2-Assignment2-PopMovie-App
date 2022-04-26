<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PopMovie - Register</title>
  <link rel="stylesheet" href="css/register.css">
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
          <form action="formSubmission.php" id="signup" class="form" method="post">
            <div class="logo"><img src="../logo/popMovie.PNG" style="width:180px; height:50px;" alt="logo"></div>
            <h1>Create your PopMovie Account</h1>

            <div class="firstname formField">
              <!-- <label for="username">First Name:</label> -->
              <input type="text" name="firstname" id="firstname" autocomplete="off" placeholder="First Name">
              <small></small>

            </div>

            <div class="last-name formField">
              <!-- <label for="username">last Name:</label> -->
              <input type="text" name="lastname" id="lastname" autocomplete="off" placeholder="Last Name">
              <small></small>

            </div>



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



            <div class="confirm-password formField">
              <!-- <label for="username">Confirm Password:</label> -->
              <input type="password" name="confirm-password" id="confirm-password" autocomplete="off" placeholder="Confirm">
              <small></small>
            </div>

            <small class="password-small"></small>

            <div class="country formField">
              <!-- <label for="username">Country:</label> -->
              <input type="text" name="country" id="country" autocomplete="off" placeholder="Country">
              <small></small>

            </div>

            <div class="city formField">
              <!-- <label for="username">City:</label> -->
              <input type="text" name="city" id="city" autocomplete="off" placeholder="City">
              <small></small>

            </div>


            <div class="signup formField">
              <input type="submit" value="Sign Up">
            </div>
          </form>
        </div>
        <div class="rightside">
          <img src="https://cdn-icons-png.flaticon.com/512/705/705062.png" alt="logo" style="width:180px; height:180px;">
          <figure>
            <figcaption>One account for all your needs.</figcaption>
          </figure>

        </div>

        <div>

        </div>

      </div>
      <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
        </svg>
      </div>
    </div>
  </div>















</body>

</html>
