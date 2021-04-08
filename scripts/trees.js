function loopOverTrees() {
  let checkbox = document.getElementsByClassName("tree-checkbox");
  let list = document.getElementsByClassName("tree-thumbnail");

  for (i = 0; i < list.length; i++) {
    let tree = list[i];
    let specs = tree.dataset.fields;

    // console.log(specs);

    let sizeTF =
      (checkbox[0].checked && specs.includes("small")) ||
      (checkbox[1].checked && specs.includes("medium")) ||
      (checkbox[2].checked && specs.includes("large")) ||
      !(checkbox[0].checked || checkbox[1].checked || checkbox[2].checked);

    let lightTF =
      (checkbox[3].checked && specs.includes("full-shade")) ||
      (checkbox[4].checked && specs.includes("partial-shade")) ||
      (checkbox[5].checked && specs.includes("full-sun")) ||
      !(checkbox[3].checked || checkbox[4].checked || checkbox[5].checked);

    let otherTF =
      (checkbox[6].checked && specs.includes("prominent_flower")) ||
      (checkbox[7].checked && specs.includes("showy_seasonal_color")) ||
      (checkbox[8].checked && specs.includes("fruitnut_producing")) ||
      (checkbox[9].checked && specs.includes("evergreen")) ||
      (checkbox[10].checked && specs.includes("tree_rebate")) ||
      (checkbox[11].checked && specs.includes("riversmart_homes")) ||
      !(
        checkbox[6].checked ||
        checkbox[7].checked ||
        checkbox[8].checked ||
        checkbox[9].checked ||
        checkbox[10].checked ||
        checkbox[11].checked
      );

    tree.style.display = "none";

    if (sizeTF && lightTF && otherTF) {
      tree.style.display = "flex";
    }

    let resetButton = document.getElementsByClassName("tree-filter__reset")[0];
    resetButton.addEventListener("click", () => {
      for (j = 0; j < checkbox.length; j++) {
        checkbox[j].checked = false;
        tree.style.display = "flex";
      }
    });
  }
}

function handleTrees() {
  let filter = document.getElementsByClassName("tree-filter")[0];

  filter.addEventListener("change", () => {
    loopOverTrees();
  });
}

function handleTreeSelection() {
  let dropdown = document.getElementsByClassName("tree-dropdown")[0];
  dropdown.addEventListener("change", () => {
    location.assign(dropdown[dropdown.selectedIndex].value);
  });
}

window.addEventListener("load", function () {
  handleTrees();
  handleTreeSelection();
});

