let descriptions = document.getElementsByClassName(
  "Plant__page-2-form-excerpt"
)[0].children;

let links = document.getElementsByClassName("Plant__page-2-links-a");

function showDescription(j) {
  console.dir(descriptions[j]);
  descriptions[j].style.display = "block";

  for (let k = 0; k < descriptions.length; k++) {
    if (j != k) {
      descriptions[k].style.display = "none";
    }
  }
}

function handleDescriptions() {
  for (let i = 0; i < links.length; i++) {
    links[i].addEventListener("mouseover", () => {
      showDescription(i);
    });
  }
}

window.addEventListener("load", () => {
  handleDescriptions();
});
