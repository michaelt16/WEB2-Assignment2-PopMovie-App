<?php
require_once "../favorites/cringy-php-js-link/writefaves.inc.php";

$faves = $_SESSION["faves"];


if (checkIfURLContains($URL, "index.php") || checkIfURLContains($URL, "")) {

  if (loggedIn() == true) {
    returnBrowseLogged();
  } else {
    returnBrowseNotLogged();
  }
}


function returnBrowseNotLogged()
{
  echo '
  

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
            <button class="button-52 applyFilter" role="button">Apply Filter</button>
            <button class="button-52 clearFilter" role="button">Clear Filter</button>
        </div>

    </div>

    <div class="col2">
        <div class="innerHeader">
            
            <div class="form__group field searchBarContainer">
                <input type="search" class="form__field browseTitle" id="search" placeholder="Search a movie..."
                    name="browseTitle">
                <label for="search" class="form__label">Search a movie...</label>
            </div>
            
        </div>

        <div class="movieInfo">
            <div class="defaultView"
                style="display:flex; flex-direction:column-reverse; background:linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);">
                <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                        <defs>
                            <path id="gentle-wave"
                                d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                        </defs>
                        <g class="parallax">
                            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                        </g>
                    </svg>

                </div>
                <div class="logo">
                    <img src="../logo/siteLogo.png" alt="logo" class="infoLogo">
                </div>
            </div>
            <div class="showMovieView" style="display:none;">
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
                        <div class="infoRatingIMDB">
                            <p class="ratingText"></p>
                            <i class="fa fa-solid fa-imdb fa-3x imdb" style="color:rgb(255, 221, 29)"></i>
                        </div>
                        <div class="infoRatingIMDB">
                            <p class="ratingText2 ratingText"></p>
                            <a href=""><i class="fa fa-heart faveHeart"></i></a>
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


            
        </div>

        <div class="innerHeader2">
            <h2 class="innerHeader2H2">Movie Results</h2>
            <div class="sortFilters">
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
<script src="../favorites/pasteFaves.js"></script>
<script src="sorting-functions.js"></script>
<script src="sort-functionality.js"></script>
';
}

function returnBrowseLogged()
{
  echo '<div class="bodyContainer">
  <div class="col1">
    <div class="userProfile">
      <img src="images/userprofile.png" alt="user picture" class="userProfileImg">
      <h2 class="userName">Jordan Pratt</h2>
      <p>Regular Member since 2022</p>
    </div>

    <div class="userOptions">
      <div class="userMovies">
        <p>Movies</p>
      </div>
      <div class="userTVShows">
        <p>TV Shows</p>
      </div>
      <div class="userGames">
        <p>Games</p>
      </div>
    </div>

    <div class="borderLine">
      <hr class="userLine">
    </div>


    <div class="userOptions2">
      <div class="userFavourites">
        <p>Favourites</p>
      </div>

      <div class="userBookmarks">
        <p>Bookmark</p>
      </div>

      <div class="userWatchLater">
        <p>Watch Later</p>
      </div>

      <div class="userLive">
        <p>Live</p>
      </div>
    </div>

    <div class="borderLine">
      <hr class="userLine">
    </div>

    <div class="filterSection">
      <h2>Filters</h2>
      <select name="filterType" class="filterType selectMenu">
        <option value="" selected disabled hidden>Select filter type...</option>
        <option value="ratingFilter">Filter By Rating</option>
        <option value="yearFilter">Filter By Year </option>
      </select>
      <select name="filterOptions" class="filterType selectMenu" disabled>
        <option value="" selected disabled hidden>Select filter option...</option>
      </select>
      <button class="button-52 applyFilter" role="button">Apply Filter</button>
      <button class="button-52 clearFilter" role="button">Apply Filter</button>
    </div>

  </div>

  <div class="col2">
        <div class="innerHeader">
    
            <div class="form__group field searchBarContainer">
                <input type="search" class="form__field browseTitle" id="search" placeholder="Search a movie..."
                    name="browseTitle">
                <label for="search" class="form__label">Search a movie...</label>
            </div>
            
        </div>

        <div class="movieInfo">
            <div class="defaultView"
                style="display:flex; flex-direction:column-reverse; background:linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);">
                <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                        <defs>
                            <path id="gentle-wave"
                                d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                        </defs>
                        <g class="parallax">
                            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                        </g>
                    </svg>

                </div>
                <div class="logo">
                    <img src="../logo/siteLogo.png" alt="logo" class="infoLogo">
                </div>
            </div>
            <div class="showMovieView" style="display:none;">
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
                        <div class="infoRatingIMDB">
                            <p class="ratingText"></p>
                            <i class="fa fa-solid fa-imdb fa-3x imdb" style="color:rgb(255, 221, 29)"></i>
                        </div>
                        <div class="infoRatingIMDB">
                            <p class="ratingText2 ratingText"></p>
                            <a href=""><i class="fa fa-heart"></i></a>
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


            
        </div>

        <div class="innerHeader2">
            <h2 class="innerHeader2H2">Movie Results</h2>
            <div class="sortFilters">
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
<script src="../favorites/pasteFaves.js"></script>
<script src="sorting-functions.js"></script>
<script src="sort-functionality.js"></script>';
}
