<?php



class Movie
{

  public $title;
  public $id;
  public $tmdb_id;
  public $imdb_id;
  public $imdb_link;
  public $release_date;
  public $vote_average;
  public $vote_count;
  public $runtime;
  public $popularity;
  public $revenue;
  public $poster_path;
  public $tagline;
  public $overview;
  public $production_companies;
  public $production_countries;
  public $genres;
  public $keywords;
  public $cast;
  public $crew;
  public $backdrop_path;


  public function __construct(
    $title,
    $id,
    $tmdb_id,
    $imdb_id,
    $imdb_link,
    $release_date,
    $vote_average,
    $vote_count,
    $runtime,
    $popularity,
    $revenue,
    $poster_path,
    $tagline,
    $overview,
    $production_companies,
    $production_countries,
    $genres,
    $keywords,
    $cast,
    $crew,
    $backdrop_path
  ) {

    $this->title = $title;
    $this->id = $id;
    $this->tmdb_id = $tmdb_id;
    $this->imdb_id = $imdb_id;
    $this->imdb_link = "https://imdb.com/title/${imdb_id}";
    $this->release_date = $release_date;
    $this->vote_average = $vote_average;
    $this->vote_count = $vote_count;
    $this->runtime = $runtime;
    $this->popularity = $popularity;
    $this->revenue = $revenue;
    $this->poster_path = $poster_path;
    $this->tagline = $tagline;
    $this->overview = $overview;
    $this->production_companies = $production_companies;
    $this->production_countries = $production_countries;
    $this->genres = $genres;
    $this->keywords = $keywords;
    $this->cast = $cast;
    $this->crew = $crew;
    $this->backdrop_path = "https://image.tmdb.org/t/p/original${backdrop_path}";
    //backdrop path starts with /
  }

  public function title()
  {
    return strtoupper($this->title);
  }

  public function backdropPath()
  {
    $backdrop_path = $this->backdrop_path;
    return "https://image.tmdb.org/t/p/original${backdrop_path}";
  }
  public function id()
  {
    return $this->id;
  }

  public function tmdb_link()
  {
    $tmdb_id = $this->tmdb_id;
    return "https://www.themoviedb.org/movie/${tmdb_id}";
  }

  public function imdb_link()
  {
    $imdb_id = $this->imdb_id;
    return "https://www.imdb.com/title/${imdb_id}";
  }

  public function release_year()
  {
    return substr($this->release_date, 0, 4);
  }

  public function release_date()
  {
    return $this->release_date;
  }

  public function vote_average()
  {
    return $this->vote_average;
  }

  public function vote_count()
  {
    return $this->vote_count;
  }

  public function runtime()
  {
    return $this->runtime;
  }

  public function popularity()
  {
    return $this->popularity;
  }

  public function revenue()
  {
    // return money_format($this->revenue);

    return $this->revenue;
  }

  public function poster_path()
  {
    $poster_path = $this->poster_path;
    return "https://image.tmdb.org/t/p/w500${poster_path}";
  }

  public function tagline()
  {
    return $this->tagline;
  }

  public function overview()
  {
    return $this->overview;
  }

  public function companies()
  {
    $companies = $this->production_companies;
    $companiesString = '<span class="companiesValue">';

    $companiesArray = json_decode($companies, true);

    foreach ($companiesArray as $company) {
      $companiesString .=  $company["name"] . ', ';
    }

    $companiesString = substr($companiesString, 0, -2);
    $companiesString .= "</span>";

    return $companiesString;
  }

  public function countries()
  {
    $countries = $this->production_countries;
    $countriesString = '<span class="countriesValue">';

    $countriesArray = json_decode($countries, true);

    foreach ($countriesArray as $country) {
      $countriesString .=  $country["name"] . ', ';
    }

    $countriesString = substr($countriesString, 0, -2);
    $countriesString .= "</span>";

    return $countriesString;
  }

  public function genres()
  {
    $genres = $this->genres;
    $genreString = "<p>";


    $genreArray = json_decode($genres, true);

    foreach ($genreArray as $genre) {
      $genreString .= $genre["name"] . ", ";
    }

    $genreString = substr($genreString, 0, -2);


    $genreString .= "</p>";

    return $genreString;
  }

  public function keywords()
  {
    $keywords = $this->keywords;
    $keywordString = '<span class="keywordsValue">';

    $keywordArray = json_decode($keywords, true);

    foreach ($keywordArray as $keywords) {
      $keywordString .= $keywords["name"] . ", ";
    }

    $keywordString = substr($keywordString, 0, -2);
    $keywordString .= "</span>";

    return $keywordString;
  }

  public function cast()
  {
    $cast = $this->cast;

    $castString = '<div class="castList">';

    $castArray = json_decode($cast, true);

    foreach ($castArray as $cast) {

      $castMember =  '<div class="castMember">';
      $castMember .= '<h3 class="character">' . $cast["character"] . "</h3>";
      $castMember .= '<h3 class="castName">' . $cast["name"] . "</h3>";
      $castMember .= '</div>';

      $castString .= $castMember;
    }

    $castString .= '</div>';

    return $castString;
  }

  public function crew()
  {
    $crew = $this->crew;

    $crewString = '<div class="crewList">';

    $crewArray = json_decode($crew, true);

    foreach ($crewArray as $crew) {

      $crewMember =  '<div class="crewMember">';
      $crewMember .= '<h3 class="department">' . $crew["department"] . "</h3>";
      $crewMember .= '<h3 class="job">' . $crew["job"] . "</h3>";
      $crewMember .= '<h3 class="crewName">' . $crew["name"] . "</h3>";
      $crewMember .= '</div>';

      $crewString .= $crewMember;
    }

    $crewString .= '</div>';

    return $crewString;
  }
}
