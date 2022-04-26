const filterSection = document.querySelector(".filterSection");
const filterOptions = document.querySelector('select[name="filterOptions"]');
const filterType = document.querySelector(".filterType");
const defaultOption = document.createElement("option");
defaultOption.setAttribute("value", "");
defaultOption.setAttribute("selected", "");
defaultOption.setAttribute("visible", "");
defaultOption.setAttribute("disabled", "");
defaultOption.textContent = "Select an option...";
const ratingSelectMenu = "";
const yearSelectMenu = "";

filterType.addEventListener('change', (e) => {
    filterOptions.value = "";
    if(filterOptions.hasAttribute("disabled")){
        filterOptions.removeAttribute("disabled");
    }
    let filterValue = filterType.value;

    if(filterValue == "ratingFilter") {
        createRatingInputMenu(filterOptions);
    }

    if(filterValue == "yearFilter") {
        createYearInputMenu(filterOptions);
    }
})



function createRatingInputMenu(filterOptions) {

    if (filterOptions.hasChildNodes()) {
        filterOptions.replaceChildren();
    }

    const below = document.createElement("option");
    below.setAttribute("value", "ratingBelow");
    below.textContent="Below";

    const above = document.createElement("option");
    above.setAttribute("value", "ratingAbove");
    above.textContent="Above";

    const between = document.createElement("option");
    between.setAttribute("value", "ratingBetween");
    between.textContent="Between";

    filterOptions.appendChild(defaultOption);
    filterOptions.appendChild(below);
    filterOptions.appendChild(above);
    filterOptions.appendChild(between);
}

function createYearInputMenu(filterOptions){
    if (filterOptions.hasChildNodes()) {
        filterOptions.replaceChildren();
    }

    const before = document.createElement("option");
    before.setAttribute("value", "yearBefore");
    before.textContent="Before";

    const after = document.createElement("option");
    after.setAttribute("value", "yearAfter");
    after.textContent="After";

    const between = document.createElement("option");
    between.setAttribute("value", "yearBetween");
    between.textContent="Between";

    filterOptions.appendChild(defaultOption);
    filterOptions.appendChild(before);
    filterOptions.appendChild(after);
    filterOptions.appendChild(between);
}