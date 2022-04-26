let faveList = document.querySelector(".burnAfterReading");
let faves = [];
faveList.childNodes.array.forEach(elem => {
  faves.push(elem.textContent);
});

sessionStorage.setItem("faves", JSON.stringify(faves));
faveList.replaceWith(""); //burn after reading
