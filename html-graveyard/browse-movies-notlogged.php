<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="api-fetch.js"></script>
  <link rel="stylesheet" href="css/browsemovie.css">
  <link rel="stylesheet" href="css/nonefavorite.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <title>PopMovie - Browse Movies</title>
</head>

<body>

  <div class="bodyContainer">


    <div class="col1">

      <div class="filterSection">
        <h2>Filters</h2>
        <select name="filterType" class="filterType selectMenu">
          <option value="" selected="" disabled="" hidden="">Select filter type...</option>
          <option value="ratingFilter">Filter By Rating</option>
          <option value="yearFilter">Filter By Year </option>
        </select>
        <select name="filterOptions" class="filterType selectMenu" disabled="">
          <option value="" selected="" disabled="" hidden="">Select filter option...</option>
        </select>
        <button class="button-52" role="button">Apply Filter</button>
      </div>

    </div>

    <div class="col2">
      <div class="innerHeader">
        <div class="headerLogos">
          <a href="../../index.php">
            <img src="https://cdn-icons-png.flaticon.com/512/705/705062.png" class="innerHeaderLogo" alt="PopCornlogo">
          </a>
        </div>

        <div class="form__group field">
          <input type="search" class="form__field browseTitle" id="search" placeholder="Search a movie..." name="browseTitle">
          <label for="search" class="form__label">Search a movie...</label>
        </div>
        <div class="extraOptions">
          <i class="fa fa-bell fa-2x" aria-hidden="true" style="color:lightgray;"></i>
          <i class="fa fa-cog fa-2x" aria-hidden="true" style="color:lightgray;"></i>
        </div>
      </div>

      <div class="movieInfo">
        <div class="movieDetails">
          <div class="importantMovieDetails">
            <h1 class="infoTitle"></h1>
            <div class="infoExtras">
              <p class="infoRuntime"></p>
              <p class="infoGenre"></p>
              <p class="infoReleaseDate"></p>
            </div>
            <p class="infoTagline"></p>
          </div>

          <div class="infoExtras2">
            <div class="infoRating">
              <p class="ratingText"></p>
              <i class="fa fa-solid fa-star fa-2x" style="color:rgb(255, 221, 29)"></i>
            </div>
            <div class="infoRatingIMDB">
              <p class="ratingText2 ratingText"></p>
              <i class="fa fa-brands fa-imdb fa-3x imdb" style="color:black;"></i>
            </div>
          </div>
        </div>

        <div class="infoExtraOptions">
          <div class="playOption">
            <i class="fa fa-solid fa-play" style="color:white;"></i>
          </div>
          <div class="infoExtraShowDetails">
            <p>Show More</p>
          </div>
        </div>
      </div>

      <div class="innerHeader2">
        <h2 class="innerHeader2H2">Movie Results</h2>
        <div class="sortFilters">
          <div class="filterContainer">
            <p class="filterTypeHeader">Test</p>
            <div class="filterX"><i class="fa fa-window-close"></i> </div>
          </div>
        </div>
        <div class="sortSection">
          <p>Sort By</p>
          <hr>
          <select name="sortOption" class="sortOption selectMenu">
            <option value="" selected="" disabled="" hidden="">Select option...</option>
            <option value="ratingASC">Highest Rating</option>
            <option value="ratingDESC">Lowest Rating </option>
            <option value="titleASC">A - Z </option>
            <option value="titleDESC">Z - A</option>
            <option value="yearASC">Latest Release</option>
            <option value="yearDESC">Oldest Release</option>
          </select>
        </div>
      </div>

      <div class="movieSection">


      </div>

    </div>
  </div>
  <script src="fetch-results-processing.js"></script>
  <script src="js/filterOptions.js"></script>
  <script src="js/movieCards.js"></script>




</body>

</html>

<style>
  .fa-heart {
    display: none;

  }
</style>
