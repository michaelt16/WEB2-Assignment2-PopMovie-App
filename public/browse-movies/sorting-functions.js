let filteredMovies = "";


function sortRatingAsc(){
  let movies = JSON.parse(sessionStorage.getItem("searchResults"));
  filteredMovies = movies.sort( (movie1, movie2) => { return movie2.vote_average - movie1.vote_average;});
  let filteredMoviesString = JSON.stringify(filteredMovies);
  sessionStorage.setItem("searchFilteredResults", filteredMoviesString);
}

function sortRatingDesc(){
  let movies = JSON.parse(sessionStorage.getItem("searchResults"));
  filteredMovies = movies.sort( (movie1, movie2) => { return movie1.vote_average - movie2.vote_average;});
  let filteredMoviesString = JSON.stringify(filteredMovies);
  sessionStorage.setItem("searchFilteredResults", filteredMoviesString);
}

function sortTitleAsc(){
  let movies = JSON.parse(sessionStorage.getItem("searchResults"));
  filteredMovies = movies.sort( (movie1, movie2) => movie1.title.localeCompare(movie2.title));
  let filteredMoviesString = JSON.stringify(filteredMovies);
  sessionStorage.setItem("searchFilteredResults", filteredMoviesString);
}

function sortTitleDesc(){
  let movies = JSON.parse(sessionStorage.getItem("searchResults"));
  filteredMovies = movies.sort( (movie1, movie2) => movie2.title.localeCompare(movie1.title));
  let filteredMoviesString = JSON.stringify(filteredMovies);
  sessionStorage.setItem("searchFilteredResults", filteredMoviesString);
}

function sortYearAsc(){
  let movies = JSON.parse(sessionStorage.getItem("searchResults"));
  filteredMovies = movies.sort( (movie1, movie2) => movie2.release_date.substr(0,4) - movie1.release_date.substr(0,4));
  let filteredMoviesString = JSON.stringify(filteredMovies);
  sessionStorage.setItem("searchFilteredResults", filteredMoviesString);
}

function sortYearDesc(){
  let movies = JSON.parse(sessionStorage.getItem("searchResults"));
  filteredMovies = movies.sort( (movie1, movie2) => movie1.release_date.substr(0,4) - movie2.release_date.substr(0,4));
  let filteredMoviesString = JSON.stringify(filteredMovies);
  sessionStorage.setItem("searchFilteredResults", filteredMoviesString);
}



