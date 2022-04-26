document.addEventListener("DOMContentLoaded", () => {


    document.querySelector ('.infoExtraShowDetails').addEventListener("click", ()=>{
        let movieDetails = document.querySelector('.infoExtraShowDetails').id;
        window.location.replace(`https://comp-3512-w22-team-01.herokuapp.com/single-movie.php?id=${movieDetails}`);
    })

})