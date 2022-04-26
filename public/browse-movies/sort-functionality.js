let sortOption = document.querySelector(".sortOption");
let sortFilters = document.querySelector(".sortFilters");

sortOption.addEventListener('change', (e) => {
  let optionValue = document.querySelector('.sortOption').value;
  console.log(optionValue);
  determineSortFunction(optionValue);

  if(sortFilters.contains(document.querySelector('.sortTag'))) {
    document.querySelector('.filterTypeHeader').textContent = optionValue;
  }
  else {
    createSortFilterTag(optionValue);
  }
})

function determineSortFunction(optionValue){

  sessionStorage.removeItem("searchFilteredResults");

  if (optionValue == "ratingASC"){
    sortRatingAsc();
  }

  if (optionValue == "ratingDESC"){
    sortRatingDesc();
  }

  if (optionValue == "titleASC"){
    sortTitleAsc();
  }

  if (optionValue == "titleDESC"){
    sortTitleDesc();
  }

  if (optionValue == "yearASC"){
    sortYearAsc();
  }

  if (optionValue == "yearDESC"){
    sortYearDesc();
  }

  reprintMovies();
}

function reprintMovies(){
    clearMovieSection();
    let filteredMovies = JSON.parse(sessionStorage.getItem("searchFilteredResults"));
    appendFilteredMoviesFound(filteredMovies);
  }

function clearMovieSection() {
  let movieSection = document.querySelector(".movieSection");
  movieSection.replaceChildren();
}

function appendFilteredMoviesFound(movies){
  movies.forEach(movie => 
    {
      let movieItem = createMovieItem(movie);

      movieSection.append(movieItem);
  });
  
}

function createSortFilterTag(optionValue) {
  const filterContainer = document.createElement("div");
  filterContainer.setAttribute("class", "filterContainer sortTag");

  const p = document.createElement("p");
  p.setAttribute("class", "filterTypeHeader");
  p.textContent = optionValue;

  const filterX = document.createElement("div");
  filterX.setAttribute("class", "filterX");
  const i = document.createElement("i");
  i.setAttribute("class", "fa fa-window-close");
  filterX.appendChild(i);

  filterContainer.append(p, filterX);
  sortFilters.append(filterContainer);
}
