// let printTitleAsTest = document.createElement("p");
// printTitleAsTest.textContent = movieTitle;
//document.addEventListener("DOMContentLoaded", e =>{
  let movieCardInfo = ""; 
  let movieCardList = "";
  let movieCardTextList = "";
  const movieSection = document.querySelector('.movieSection');

  let faves = JSON.parse(sessionStorage.getItem("faves"));

  //printMovies();
  let movies = JSON.parse(sessionStorage.getItem("searchResults")); 
    let movieTitle = sessionStorage.getItem("searchParam");
    //movieTitle.replace("%20", " ");
    sessionStorage.setItem("searchParam", movieTitle);

  //FUNCTIONS
  function printMovies(data){
    // for now we will display none ....
    
    if (noMoviesFound()){
      displayNoResults();
    }
    else{
      appendMoviesFound(data);
    }

    return data; 
  }

  function noMoviesFound(){
    return JSON.parse(sessionStorage.getItem("searchResults")) == 0;
  }

  function displayNoResults(){
    let movieSection = document.querySelector('.movieSection'); 
     let noneFound = document.createElement("p"); //could be an h2, etc...
     noneFound.textContent = `No results found for ${movieTitle}`;
     movieSection.appendChild(noneFound);
     document.querySelector('.movieInfo').style.display = 'none';
  }

  function appendMoviesFound(movies){
    let printMoviesAsTest = document.createElement("ul");
    sortByTitle(movies);
    movies.forEach(movie => 
      {
        let movieItem = createMovieItem(movie);
        movieSection.append(movieItem);
    });
    
  }

  function sortByTitle(someList){
    someList.sort((movie1, movie2) => movie1.title.localeCompare(movie2.title));
  }
//});//end domcontentloaded

  function createMovieItem(movie) {
    const movieItem = document.createElement('div');
    movieItem.setAttribute('class', 'movieItem');
   

    const img = document.createElement("img");
    img.setAttribute("src", `https://image.tmdb.org/t/p/w342${movie.poster_path}`);
    img.setAttribute("class", "moviePoster");
    img.setAttribute("alt", "movie poster");
    img.setAttribute("style", "width: 240px;");
    img.setAttribute("id", `${movie.id}`);


    movieItem.append(img);
    return movieItem;
  }

function yearFormat(movieYear){
  return movieYear.substring(0,4)
}

function noResultsFound(movie){
  if(movie.length == 0 ){
    return document.querySelector('.movieInfo').style.display = 'none';
  }
}


//})
