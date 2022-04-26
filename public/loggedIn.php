<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="loggedIn.css" />
  <link rel="stylesheet" href="header/css/header.css" />
  <script src="header/js/dropdown.js"> </script>
  <!-- <link rel="stylesheet" href="../css/waves.css" /> -->
  <!-- <script src="header/js/hamBurgerMenu.js"></script>
  <script src="header/js/dropdown.js"> </script> -->
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <link href="//db.onlinewebfonts.com/c/cb2f7b6a6fdfdf8fa5a0ca69d0e11f0b?family=Versatile-Bold" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <script src="titleSubmit.js"></script>
</head>

<body>
  <div class="header-area-logged">
    <a href="loggedIn.php" class="nav-logo">
      <img src="https://cdn-icons-png.flaticon.com/512/705/705062.png" style="width:70px; height:70px;" alt="PopCornlogo">
    </a>

    <div class="account-container">
      <img src="logo/userprofile.png" alt="icon" style="width:35px; height:35px;">
      <p> Hi, Mahkel <i class="fa fa-caret-down"></i></p>

    </div>

    <div class="drop-down" style="display:none">
      <a href="favorites.php" class="nav-link">Favorite Movies</a> <br>
      <a href="aboutus/about.php" class="nav-link">About Us</a><br>
      <a href="indexLoggingOut.php" id="logout" class="nav-link" style="color:#ef3038;">Log out </a>
    </div>

    <div class="hamburger" style="display:none;">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>

  </div>

  <div class="container">




    <div class="top-container">
      <img src="logo/userprofile.png" width="300px" height="300px">

      <div class="right-top">
        <h2>PROFILE</h2>
        <h1>mahkel</h1>

      </div>

    </div>

    <div class="bottom-container">

      <div class="bottom-top">
        <h2 class="recommended">Recommended Movies</h2>
        <div class="search">

          <!-- <input type="text"> -->
          <i class="fa fa-search" style="font-size: 50px;"></i>

        </div>
      </div>

      <div class="card-container">
        <div class="card-display">

          <div class="card">
            <span>8.4</span>
            <img src="https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt="movie-cards">
          </div>

          <div class="card">
            <span>8.4</span>
            <img src="https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt="movie-cards">
          </div>
          <div class="card">
            <span>8.4</span>
            <img src="https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt="movie-cards">
          </div>
          <div class="card">
            <span>8.4</span>
            <img src="https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt="movie-cards">
          </div>
          <div class="card">
            <span>8.4</span>
            <img src="https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt="movie-cards">
          </div>
          <div class="card">
            <span>8.4</span>
            <img src="https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt="movie-cards">
          </div>


        </div>

      </div>
      <div class="favorite">
        <h2>Favorited Movies</h2>

        <div class="favorited-container">
          <div class="inner-favorite-container">
            <h1>Happy Feet</h1>
            <p>Into the world of the Emperor Penguins, who find their soul mates through song, a penguin is born who cannot sing. But he can tap dance something fierce!</p>
            <img src="https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt="movie-cards">
            <i class="fa fa-heart"></i>

          </div>


        </div>






      </div>





    </div>



</body>

</html>
