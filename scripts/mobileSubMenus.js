function handleMobileSubMenus() {
  let mobileNav = document.querySelector(".Mobile-Nav__ul");
  let menuItems = mobileNav.querySelectorAll(".menu-item");

  function toggleSubNav() {
    console.log(this);
    if (this.classList.contains("sub-menu__active")) {
      this.classList.remove("sub-menu__active");
    } else if (mobileNav.querySelector(".sub-menu__active")) {
      mobileNav
        .querySelector(".sub-menu__active")
        .classList.remove("sub-menu__active");
      this.classList.add("sub-menu_active");
    } else {
      this.classList.add("sub-menu__active");
    }
  }

  for (let menuItem of menuItems) {
    console.log(menuItem);
    if (menuItem.querySelector(".sub-menu")) {
      menuItem.addEventListener("click", toggleSubNav);
    }
  }
}

window.addEventListener("load", function () {
  handleMobileSubMenus();
});