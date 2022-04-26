const clearButton = document.querySelector("button");

button.addEventListener('click', (e) => {
    console.log(filterOptions.value);
})

function clearFilters() {
  
}

function clearAllMovies() {
  let movies = JSON.parse(sessionStorage.getItem("searchResults"));
  let movieSection = document.querySelector('.movieSection');
  movieSection.replaceChildren();
  appendMoviesFound(movies);
}

function appendMovies(movies) {
  
}
