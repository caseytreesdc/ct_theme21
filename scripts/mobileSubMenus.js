function handleMobileSubMenus() {
  let spanNode = document.createElement("span");
  spanNode.classList.add("toggle-mobile-subnav");
  let textNode = document.createTextNode("+");
  spanNode.appendChild(textNode);

  let topLevelElements = document.getElementsByClassName("Mobile-Nav__ul")[0];

  let listItems = topLevelElements.children 
  listItems.forEach(item => {
      console.log(item)
  })
}

// window.addEventListener("load", function () {
//   handleMobileSubMenus();
// });
