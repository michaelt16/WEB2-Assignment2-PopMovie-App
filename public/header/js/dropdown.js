document.addEventListener('DOMContentLoaded',() =>{
  if (document.querySelector(".account-container") != null){
    document.querySelector (".account-container").addEventListener ("click", ()=>{
        if (document.querySelector(".drop-down").style.display == "none") {
            document.querySelector(".drop-down").style.display = "block";
          } else if (document.querySelector(".drop-down").style.display == "block") {
            document.querySelector(".drop-down").style.display = "none";
          }

    })


  }
})
