  document.addEventListener("DOMContentLoaded", e =>{
  let searchBox = document.querySelector("#searchBox");
  let titleSearchForm = document.querySelector("#titleSearchForm");

  //button click: submit by proxy
  let button = document.querySelector(".searchButton i");
  button.addEventListener("click", attemptSubmit);


//form submission
  titleSearchForm.addEventListener('submit', attemptSubmit);
  
//warning text
  searchBox.addEventListener("input", hideWarningText);

function submitByProxy(e){
  //let button = document.querySelector(".searchButton i");
  if (e.target == button){
    attemptSubmit(e);
  }
  
}

function formIsEmpty(){
  return !searchBox.value || searchBox.value == 0;
}

function showWarningText(){
    //shows the warning error
    document.querySelector(".inputWarning h3").hidden = false;
}

function hideWarningText(){
  document.querySelector(".inputWarning h3").hidden = true;
}

function attemptSubmit(e){
  if (formIsEmpty()){
    e.preventDefault();
    showWarningText();
  }
  else{
      // e.preventDefault();
    sessionStorage.setItem("searchParam", searchBox.value);
    // apiFetch(titleSearchForm); 
    titleSearchForm.submit();
  }
}

})
