function addClassToFirstNavLink() {
  let mainNavigation = document.getElementsByClassName("Nav__ul")[0];
  let firstAnchor = mainNavigation.firstChild.firstChild.firstChild.firstChild;
  firstAnchor.id = "navigation";
}

window.addEventListener("load", () => {
  addClassToFirstNavLink();
});
