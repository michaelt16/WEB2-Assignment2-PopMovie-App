const movieItem = document.querySelector('.movieItem');
const showMovieView = document.querySelector('.showMovieView');
const defaultView = document.querySelector('.defaultView');
const defaultViewAttr = defaultView.getAttribute('style');
const showMovieViewAttr = showMovieView.getAttribute('style');

movieItem.addEventListener('click', (e) => {

    if(defaultViewAttr.includes("display:flex")) {
        defaultView.setAttribute('style', 'display:none');
        showMovieView.setAttribute('style', 'display:flex; flex-direction:column-reverse');
    }

})

function foo() {
  alert('hi');
}
