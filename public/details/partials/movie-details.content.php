<?php

$id = $_GET["id"];
?>

<div class="mainViewContainer">
  <div class="movieContainer" data-aos="fade-up" data-aos-duration="2000">
    <div class="movieTitle">
      <h1><?= $movieDetails->title()  ?></h1>
    </div>

    <div class="yearGenreRating">
      <div class="movieYear">
        <p><?= $movieDetails->release_year()  ?></p>
      </div>
      &bull;
      <div class="movieRating">
        <p><?= $movieDetails->vote_average()  ?> &#9733;</p>
      </div>
      &bull;
      <div class="movieGenre">
        <?= $movieDetails->genres()  ?>
      </div>

    </div>

    <div class="movieOverview">
      <p><?= $movieDetails->overview()  ?></p>
    </div>
    <a href="https://comp-3512-w22-team-01.herokuapp.com/favorites/checkFavourites.inc.php?id=<?= $id ?>">
      <div class="movieFavourite">
        <i id="heart" class="icon-heart-empty"></i>
        <p>ADD TO FAVOURITES</p>
      </div>
    </a>

    <div class="showMore">
      <button class="showMoreButton">More Information...</button>
    </div>
  </div>


  <div class="playMovie" data-aos="fade-up" data-aos-duration="2000">
    <img src="../img/playLogo.png" class="playLogo" alt="playLogo">
    <h3>PLAY MOVIE</h3>
  </div>
</div>

<div class="moreInfoContainer" style="display:none">


  <div class="movieExtraDetails">
    <div class="arrowMark">
      <img src="../img/arrowMark.png" class="arrowmark" alt="arrowmark">
      <p class="goBack">Go Back</p>
    </div>
    <div class="releaseDate">
      <p> <strong>Release Date</strong> &nbsp; &nbsp; &bull; &nbsp; <span class="releaseDateValue"> <?= $movieDetails->release_date() ?> </span></p>
    </div>

    <div class="numberStats">
      <p class="popularity"> <strong>Popularity</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&bull; &nbsp; &nbsp;<span class="popularityValue"><?= $movieDetails->popularity()  ?></span></p>
      <p class="voteCount"> <strong>Vote Count</strong> &nbsp; &nbsp; &nbsp; &nbsp; &bull; &nbsp; &nbsp;<span class="voteCountValue"><?= $movieDetails->vote_count()  ?></span> </p>
      <p class="revenue"> <strong>Revenue</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &bull; &nbsp; &nbsp;<span class="revenueVolue">$<?= $movieDetails->revenue()  ?></span></p>
      <p class="runtime"> <strong>Runtime</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &bull; &nbsp; &nbsp;<span class="runtimeValue"><?= $movieDetails->runtime()  ?></span></p>
    </div>

    <div class="tagline">
      <p> <strong>Tagline</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &bull; &nbsp; &nbsp; <span class="taglineValue"><?= $movieDetails->tagline()  ?></span></p>
    </div>

    <div class="links">
      <p> <strong>IMDB</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&bull; &nbsp; &nbsp;<span class="imdblink"><?= $movieDetails->imdb_link()  ?></span></p>
      <p> <strong>TMDB</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &bull; &nbsp; &nbsp;<span class="tmdblink"><?= $movieDetails->tmdb_link()  ?></span></p>
    </div>

    <div class="movieKeywords">
      <p> <strong>Keywords</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &bull; &nbsp; &nbsp;<?= $movieDetails->keywords() ?></p>
    </div>

    <div class="moreExtras">
      <p><strong>Countries</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &bull; &nbsp; &nbsp; <?= $movieDetails->countries() ?></p>
      <p><strong>Companies</strong>&nbsp; &nbsp; &nbsp; &nbsp; &bull; &nbsp; &nbsp; <?= $movieDetails->companies() ?></p>
    </div>
  </div>

  <div class="castCrewCol">
    <div class="castCrewButtons">
      <button class="castButton">Cast</button>
      <button class="crewButton">Crew</button>
    </div>

    <div class="castCrewHeader">
      <h2 class="headerPlaceholder">Cast</h2>
    </div>

    <div class="castCol">
      <div class="characterNameHeader">
        <h2>Character</h2>
        <h2>Name</h2>
      </div>

      <?= $movieDetails->cast() ?>
    </div>

    <div class="crewCol hidden">
      <div class="deptJobNameHeader">
        <h2>Department</h2>
        <h2>Job</h2>
        <h2>Name</h2>
      </div>

      <?= $movieDetails->crew() ?>

    </div>
  </div>

</div>


</div>
