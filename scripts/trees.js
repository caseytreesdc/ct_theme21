function loopOverTrees() {
  let list = document.getElementsByClassName("tree-thumbnail");
  let checkbox = document.getElementsByClassName("tree-checkbox");

  for (i = 0; i < list.length; i++) {
    let tree = list[i];
    let specs = tree.dataset.fields;

    console.log(specs);

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
      // if I do it the right way
      //   (checkbox[6] &&
      //   checkbox[7] &&
      //   checkbox[8]) &&
      //   (specs.includes("prominent_flower") &&
      //   specs.includes("showy_seasonal_color") &&
      //   specs.includes("fruitnut_producing"));

      // but If I treat these like the rest:
      (checkbox[6].checked && specs.includes("prominent_flower")) ||
      (checkbox[7].checked && specs.includes("showy_seasonal_color")) ||
      (checkbox[8].checked && specs.includes("fruitnut_producing")) ||
      (checkbox[9].checked && specs.includes("evergreen")) ||
      !(
        checkbox[6].checked ||
        checkbox[7].checked ||
        checkbox[8].checked ||
        checkbox[9].checked
      );

    tree.style.display = "none";

    if (sizeTF && lightTF && otherTF) {
      tree.style.display = "flex";
    }
  }
}

function handleTrees() {
  let filter = document.getElementsByClassName("tree-filter")[0];

  filter.addEventListener("change", () => {
    loopOverTrees();
  });
}

window.addEventListener("load", function () {
  handleTrees();
});
