button = document.getElementsByClassName("tree-filter__display")[0];
filter = document.getElementsByClassName("tree-filter")[0];

function showHideTreeFilter() {
  if (filter.style.display === "block") {
    filter.style.display = "none";
    button.children[0].innerHTML = "Show Filter Options";
    button.style.borderBottomLeftRadius = "5px";
    button.style.borderBottomRightRadius = "5px";
  } else {
    filter.style.display = "block";
    button.children[0].innerHTML = "Hide Filter";
    button.style.borderBottomLeftRadius = "0";
    button.style.borderBottomRightRadius = "0";
  }
}

function handleTreeOptionsDisplay() {
  button.addEventListener("click", () => {
    showHideTreeFilter();
  });
}

window.addEventListener("load", () => {
  handleTreeOptionsDisplay();
});
