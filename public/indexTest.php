<?php

// require "header/updateState.php";
$URL = $_SERVER['REQUEST_URI'];





if (checkIfURLContains($URL, "index.php") || checkIfURLContains($URL, "")) {

  if (loggedIn() == true) {
    returnLoggedInIndex();
  } else {
    returnNotLoggedIndex();
  }
}

function returnLoggedInIndex()
{
  echo '<div class ="container">

<div class = "top-container">
  <img src = "logo/userprofile.png" width="300px" height="300px">

  <div class ="right-top">
    <h2>profile</h2>
    <h1>' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"] . '</h1>
    <h3>' . $_SESSION["city"] . ',  ' . $_SESSION["country"] . ' </h3>
    

  </div>

</div>

<div class ="bottom-container">

  <div class = "bottom-top">
  <h2 class ="recommended">Recommended Movies</h2>
  <div class = "search">
    
    <!-- <input type="text"> -->
    <!-- <i class = "fa fa-search" style="font-size: 50px;"></i> -->


    <form action="browse-movies/browse-movies.php" method="get" id="titleSearchForm" autocomplete="off">
    <!-- action="browse-movies/browse-movies.php"   -->
    <input type="text" placeholder="Search Movies" name="searchTitle" id="searchBox">
    <span class="searchButton">
    
    </span>
    <!-- <input type="submit" value="Search"> -->
  </form>

  </div>
</div>
  
<div class="card-container">
  <div class ="card-display">

    <div class ="card">
      <span>8.4</span>
      <img src = "https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt ="movie-cards">
    </div>

    <div class ="card">
      <span>8.4</span>
      <img src = "https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt ="movie-cards">
    </div>
    <div class ="card">
      <span>8.4</span>
      <img src = "https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt ="movie-cards">
    </div>
    <div class ="card">
      <span>8.4</span>
      <img src = "https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt ="movie-cards">
    </div>
    <div class ="card">
      <span>8.4</span>
      <img src = "https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt ="movie-cards">
    </div>
    <div class ="card">
      <span>8.4</span>
      <img src = "https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt ="movie-cards">
    </div>
    

  </div>

</div>
<div class ="favorite">
  <h2>Favorited Movies</h2> 
  
  <div class="favorited-container">
    <div class="inner-favorite-container">
      <h1>Happy Feet</h1>
      <p>Into the world of the Emperor Penguins, who find their soul mates through song, a penguin is born who cannot sing. But he can tap dance something fierce!</p>
      <img src = "https://image.tmdb.org/t/p/w185/za41IHkj6LnkilfTzv5B2qmthKD.jpg" alt ="movie-cards">
      <i class ="fa fa-heart"></i>
      
    </div>

    
  </div>






</div>





</div>';
}

function returnNotLoggedIndex()
{
  echo '<div class="header">
    <div class="inner-header flex">
      <div class="defaultContainer">


        <div class="bottom-area">
          <img src="logo/popMovie.PNG" class="popLogo" alt="logo">
          <div class="search-bar">
            <div class="inputWarning">
              <h3 hidden>Please enter a movie to search for</h3>
            </div>
            <form action="browse-movies/browse-movies.php" method="get" id="titleSearchForm" autocomplete="off">
              <!-- action="browse-movies/browse-movies.php"   -->
              <input type="text" placeholder="Search Movies" name="searchTitle" id="searchBox">
              <span class="searchButton">
                <i class="fa fa-search" id="coolerSearchButton" aria-hidden="true"></i>
              </span>
              <!-- <input type="submit" value="Search"> -->
            </form>


          </div>

        </div>

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
  </div>';
}
