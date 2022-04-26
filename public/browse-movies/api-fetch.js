//fetch("https://comp-3512-w22-team-01.herokuapp.com/api/movies.php?title=batman")
//.then(response => response.json());
document.addEventListener("DOMContentLoaded", e =>{
  console.log('test');
  let title = sessionStorage.getItem("searchParam");
  fetch(`https://comp-3512-w22-team-01.herokuapp.com/api/movies.php?title=${title}`)
  .then(response => response.json())
  .then (logAndPassItOn)
  .then(getResultsIntoSession)
  .then (logAndPassItOn)
  .then(printMovies)
  .then(displayInfo);
  // .then(window.location.replace("http://localhost/asg-2-teamwork-team-a2-01/public/index.php"));
  // .then(window.location.replace("http://localhost/asg-2-teamwork-team-a2-01/public/browse-movies/browse-movies.php"));
  // .then(form.submit());
  //.then(printMovies)
  //todo: set into session storage
  
}) 
function getResultsIntoSession (data){
  sessionStorage.setItem("searchResults", JSON.stringify(data));
  return data; 
}


function logAndPassItOn (data){
  console.log (data);
  return data; 
}

function test(){
  console.log('hello'); 
}
