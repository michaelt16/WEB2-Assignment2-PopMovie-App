let movieInfo = document.querySelector(".movieInfo");
let infoTitle = document.querySelector(".infoTitle");
let infoGenre = document.querySelector(".infoGenre");
let infoExtraShowDetails = document.querySelector('.infoExtraShowDetails');
let infoRuntime = document.querySelector(".infoRuntime"); 
let infoReleaseDate = document.querySelector(".infoReleaseDate"); 
let infoTagline = document.querySelector(".infoTagline");
let ratingText = document.querySelector(".ratingText");
let ratingText2 = document.querySelector(".ratingText2");
let listOfMovies = JSON.parse(sessionStorage.getItem('searchResults')); 
const showMovieView = document.querySelector('.showMovieView');
const defaultView = document.querySelector('.defaultView');
const defaultViewAttr = defaultView.getAttribute('style');

function setFaveLink(movId){
  let aLink = document.querySelector(".faveHeart").parentNode;
  aLink.href = `https://comp-3512-w22-team-01.herokuapp.com/favorites/checkFavourites.inc.php?id=${movId}`;
}

function displayInfo(data){

movieSection.addEventListener('click', (e) => {
  
  if(defaultViewAttr.includes("display:flex")) {
    defaultView.setAttribute('style', 'display:none');
    showMovieView.setAttribute('style', 'display:flex; flex-direction:column-reverse');
  }
    

    if (e.target.classList.contains('moviePoster')) {
        let posterID = e.target.id;

        data.forEach ((movie) => {
            if(movie.id == posterID) {
                movieInfo.style.backgroundImage = `url(https://image.tmdb.org/t/p/original${movie.backdrop_path})`;
                
                infoTitle.textContent = movie.title; 
                infoExtraShowDetails.setAttribute("id",`${movie.id}`); 

                let listOfGenres = []; 
                let arrayOfGenres = JSON.parse(movie.genres); 
                arrayOfGenres.forEach(genre => {

                  listOfGenres.push(genre.name);
                });

                let arrayOfGenresString = listOfGenres.join(', ');

                infoGenre.textContent = arrayOfGenresString;

                infoRuntime.textContent = `${movie.runtime} minutes`;
                infoReleaseDate.textContent = movie.release_date;
                ratingText.textContent = movie.vote_average;
                ratingText2.textContent = movie.vote_average;
                infoTagline.textContent = movie.overview;
            }
        })


        setFaveLink(posterID); 
    }
})

}
