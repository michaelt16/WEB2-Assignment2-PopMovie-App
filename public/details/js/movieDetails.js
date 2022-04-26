const moreInfoButton = document.querySelector('.showMoreButton');
const moreInfoContainer = document.querySelector('.moreInfoContainer')
const mainViewContainer = document.querySelector('.mainViewContainer');
const goBackButton = document.querySelector('.arrowmark');
const body = document.querySelector('body');

moreInfoButton.addEventListener('click', (e) => {
    
    mainViewContainer.classList.add('hidden');
    moreInfoContainer.classList.remove('hidden');
    moreInfoContainer.style.display="flex";

})

goBackButton.addEventListener('click', (e) => {
    mainViewContainer.classList.remove('hidden');
    moreInfoContainer.classList.add('hidden');
    moreInfoContainer.style.display="none";
})

const castButton = document.querySelector('.castButton');
const crewButton = document.querySelector('.crewButton');
const castCol = document.querySelector('.castCol');
const crewCol = document.querySelector('.crewCol');
const headerPlaceholder = document.querySelector('.headerPlaceholder');

castButton.addEventListener('click', (e) => {
    castCol.classList.remove('hidden');
    crewCol.classList.add('hidden');
    headerPlaceholder.textContent = "Cast";
})

crewButton.addEventListener('click', (e) => {
    crewCol.classList.remove('hidden');
    castCol.classList.add('hidden');
    headerPlaceholder.textContent = "Crew";
})